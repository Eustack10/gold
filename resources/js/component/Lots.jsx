import React, { useState } from 'react'
import axios from "axios";
import LotModal from "./LotModal";
import { useForm } from "react-hook-form";
const Lots = () => {
    const [lots, setLots] = useState([]);
    const [showLotModal, setShowLotModal] = useState(false);
    const [selectedCheck, setSelectedCheck] = useState([]);
    const [createdGems, setCreatedGems] = useState([]);
    const {
        register,
        handleSubmit,
        reset,
        formState: { errors },
      } = useForm();
    const changeFn = e => {
        const gem_name = e.target.value;
        const gem_id = gems.find(val => val.name == gem_name)?.id
        axios.get(`/api/get_lots_by_gem_id/${gem_id}`)
        .then((result) => {
            setLots(result.data);
        }).catch((err) => {
            console.log(err.result, 'xXXX');
        });
    }
    const saveGem = (data) => {
        setCreatedGems([...createdGems,data]);
        setSelectedCheck([]);
        reset();

    }

    const deleteCreatedGems = (index) => {
        setCreatedGems([...createdGems.filter((val, i) => i != index)])
    }
  return (
    <>

    <div className="bg-white p-2">
        <div className="">
            <b>Manage Lot</b>
        </div>
        <form onSubmit={handleSubmit(saveGem)} id='createdGem' className=" d-flex flex-wrap mt-2 lot-input">
            <div style={{ width: "15%" }}>
                <small className="">Gemstone</small>
                <select
                    className="w-90 btn btn-sm border border-dark bg-white p-0"
                    {...register('gems_id', {
                        onChange: changeFn
                    })}
                >
                    <option disabled selected>--Select--</option>
                    {
                        gems.map(val => (
                            <option key={val.id} value={val.name}>{val.name}</option>
                        ))
                    }
                </select>
            </div>
            <div style={{ width: "15%" }}>
                <small className="">Pcs</small>{" "}
                <br />
                <input
                    {...register('pcs')}
                    style={{
                        fontSize: "14px",
                    }}
                    className="w-90 btn btn-sm p-0 m-0  border border-dark bg-white"
                    type="text"
                />
            </div>
            <div style={{ width: "15%" }}>
                <small className="">Weight</small>
                <br />
                <input
                    {...register('weight')}
                    style={{
                        fontSize: "14px",
                    }}
                    className="w-90 btn btn-sm p-0 m-0  border border-dark bg-white"
                    type="text"
                />
            </div>
            <div style={{ width: "15%" }}>
                <small className="">Price</small>
                <br />
                <input
                    {...register('price')}
                    style={{
                        fontSize: "14px",
                    }}
                    className="w-90 btn btn-sm p-0 m-0  border border-dark bg-white"
                    type="text"
                />
            </div>
            <div style={{ width: "15%" }}>
                <small className="">Amount</small>
                <br />
                <input
                    {...register('amount')}
                    style={{
                        fontSize: "14px",
                    }}
                    className="w-90 btn btn-sm p-0 m-0  border border-dark bg-white"
                    type="text"
                />
            </div>
            <div className="ml-2 w-auto saveLot">
                <br />
                <button onClick={()=>setShowLotModal(true)} type='button' className="btn  btn-sm btn-outline-dark">
                    + Lot
                </button>
                <button className="btn btn-sm btn-dark" formTarget='createdGem'>
                    Save
                </button>
            </div>
            
        </form>
        <LotModal
                show={showLotModal}
                handleClose={()=>setShowLotModal(false)}
                selectedCheck={selectedCheck}
                setSelectedCheck={setSelectedCheck}
                lots={lots} />
        <table
            className="table"
            id="examplee"
            style={{ width: "100%" }}
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gem</th>
                    <th>Pcs</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>Lot</th>
                    <th>option</th>
                </tr>
            </thead>
            <tbody>
                {
                    createdGems.map((val, index) => (
                        <tr key={index}>
                            <td>{ index+1 }</td>
                            <td>
                                {val.gems_id}
                                
                            </td>
                            <td>{val.pcs}</td>
                            <td>{val.weight}</td>
                            <td>{val.price}</td>
                            <td>{val.amount}</td>
                            <td>{selectedCheck.join(',')}</td>
                            <td>
                                <span className="btn btn-sm btn-primary">
                                    Edit
                                </span>
                                <span className="btn btn-sm btn-danger" onClick={() => deleteCreatedGems(index)}>
                                    Delete
                                </span>
                            </td>
                        </tr>
                    ))
                }
            </tbody>
        </table>
    </div>
    </>
  )
}

export default Lots;
