import React, { useEffect, useState } from 'react'
import axios from "axios";
import LotModal from "./LotModal";
import { useForm } from "react-hook-form";
import DataTable from 'react-data-table-component';
const Lots = () => {
    const [lots, setLots] = useState([]);
    const [showLotModal, setShowLotModal] = useState(false);
    const [selectedLotRow, setSelectedLotRow] = useState([]);
    const [selectedRow, setSelectedRow] = useState([]);
    const [isEdit, setIsEdit] = useState(false);
    const lotCols = [
        {
            name: 'ID',
            selector: row => row.id,
        },
        {
            name: 'Gem',
            selector: row => row.gems_id,
        },
        {
            name: 'Pcs',
            selector: row => row.pcs,
        },
        {
            name: 'Weight',
            selector: row => row.weight,
            hide: 'sm'
        },
        {
            name: 'Price',
            selector: row => row.price,
            hide: 'sm'
        },
        {
            name: 'Amount',
            selector: row => row.amount,
            hide: 'sm'
        },
        // {
        //     name: 'Lots',
        //     selector: row => row?.lots?.map(val => val.name).join(', '),
        // },
        // {
        //     name: 'Action',
        //     // selector: row => row.year,
        //     cell: row => (<div className='d-flex flex-column'>
        //         <button onClick={()=>{
        //             setSelectedRow(row)
        //             setIsEdit(true);
        //         }} className="btn btn-sm btn-primary">
        //             Edit
        //         </button>
        //         <button className="btn btn-sm btn-danger" onClick={() => deleteCreatedGems(row.id)}>
        //             Delete
        //         </button>
        //     </div>)
        // },
    ];
  
    const {
        register,
        handleSubmit,
        reset,
        setValue,
        watch,
        formState: { errors },
      } = useForm();

    const changeFn = () => {
        const gem_name = watch('gems_id');
        const gem_id = gems.find(val => val.id == gem_name)?.id
        axios.get(`/api/get_lots_by_gem_id/${gem_id}`)
        .then((result) => {
            setLots(result.data);
        }).catch((err) => {
            console.log(err.result, 'xXXX');
        });
    }

    useEffect(() => {
        setValue('gems_id', selectedRow.gems_id);
        setValue('pcs', selectedRow.pcs);
        setValue('weight', selectedRow.weight);
        setValue('price', selectedRow.price);
        setValue('amount', selectedRow.amount);
        // console.log(selectedRow.lots, 'PPOPOP');
        setSelectedLotRow(selectedRow.lots);
    }, [selectedRow]);

    useEffect(()=>{
        changeFn();
    },[watch('gems_id')])
    // const saveGem = (data) => {
    //     setCreatedGems([...createdGems,data]);
    //     setSelectedCheck([]);
    //     reset();

    // }

    const deleteCreatedGems = async (id) => {
        setLoading(true);
        await axios.post('/api/delete_lots',{id})
        .then((result) => {
            setData(result.data);
        }).catch((err) => {
        }).finally(()=>{
            setLoading(false);
        });
    }
    // const saveLots = dataa => {
    //     alert(123)
    //     dataa.id = lots.length + 1;
    //     dataa.lots = [];
    //     // setLots(dataa);
    //     data.push(dataa);
    // }
    const [data, setData] = useState([]);
    const [show, setShow] = useState(false);
    const [loading, setLoading] = useState(false);
    const [perPage, setPerPage] = useState(10);
    
    useEffect(() =>{
        fetchLots();
    }, []);
    const ExpandedComponent = ({ data }) => (
        <div className='d-flex ml-5 flex-column pl-3'>
            <div className='row border d-lg-none'>
                <div className='col-4 col-lg-2'>Weight</div>
                <div className='col'>{data?.weight}</div>
            </div>

            <div className='row border d-lg-none'>
                <div className='col-4 col-lg-2'>Price</div>
                <div className='col'>{data?.price}</div>
            </div>

            <div className='row border d-lg-none'>
                <div className='col-4 col-lg-2'>Amount</div>
                <div className='col'>{data?.amount}</div>
            </div>

            <div className='row border'>
                <div className='col-4 col-lg-2'>Lots</div>
                <div className='col'>{data.lots?.map(val => val.name)?.join(',')}</div>
            </div>

            <div className='row border'>
                <div className='col-4 col-lg-2'>Action</div>
                <div className='col d-flex flex-column'>
                    <button onClick={()=>{
                    setSelectedRow(data)
                    setIsEdit(true);
                    }} className="btn btn-sm btn-primary" style={{width:'fit-content'}}>
                        Edit
                    </button>
                    <button className="btn btn-sm btn-danger" style={{width:'fit-content'}} onClick={() => deleteCreatedGems(data.id)}>
                        Delete
                    </button>
                </div>
            </div>
        </div>
    );
    const saveLots = async (data) => {
        setLoading(true);
        let url = isEdit ? '/api/update_lots' : '/api/set_lots';
        if(isEdit){
            data.id = selectedRow.id;
        }
        data.lots = selectedLotRow?.map( val => val.id);
        await axios.post(url,data)
        .then((result) => {
            if(result.data){
                setData(result.data);
            }
        }).catch((err) => {
            console.log(err, 'PPPP');
        }).finally(()=>{
            setLoading(false);
            restForm();
        });
    }
    const fetchLots = async () => {
        setLoading(true);
        await axios.post('/api/get_lots',data)
        .then((result) => {
            setData(result.data);            
        }).catch((err) => {
            console.log(err, 'PPPP');
        }).finally(()=>{
            setLoading(false);
        });
    };
    const restForm = ()=>{
        setValue('gems_id', '');
        setValue('pcs', '');
        setValue('weight', '');
        setValue('price', '');
        setValue('amount', '');
        setSelectedLotRow([]);
        setSelectedRow([]);
    }
  return (
    <>

    <div className="bg-white p-2">
        <div className="">
            <b>Manage Lot</b>
        </div>
        <form onSubmit={handleSubmit(saveLots)} id='createdGem' className=" d-flex flex-wrap mt-2 lot-input">
            <div style={{ width: "15%" }}>
                <small className="">Gemstone</small>
                <select
                    className="w-90 btn btn-sm border border-dark bg-white p-0"
                    {...register('gems_id')}
                >
                    <option disabled selected>--Select--</option>
                    {
                        gems.map(val => (
                            <option key={val.id} value={val.id}>{val.name}</option>
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
                <button onClick={()=>{setShowLotModal(true)}} type='button' className="btn btn-sm btn-outline-dark">
                    + Lot
                </button>
                {
                    isEdit ? 
                    <>

                    <button className="btn btn-sm btn-dark" formTarget='createdGem'>
                    Update
                    </button>

                    <button className="btn btn-sm btn-dark" type='button' onClick={()=>{
                        restForm(); setIsEdit(false);
                    }}>
                    Cancel
                    </button>
                    </>
                :
                <button className="btn btn-sm btn-dark" formTarget='createdGem'>
                    Save
                </button>
                }
                
            </div>
            
        </form>
        <LotModal
            show={showLotModal}
            handleClose={()=>setShowLotModal(false)}
            selectedLotRow={selectedLotRow}
            setSelectedLotRow={setSelectedLotRow}
            lots={lots} />
        {/* <table
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
        </table> */}
        <DataTable
            //title="Data"
            expandableRows
            pagination={false}
		    expandableRowsComponent={ExpandedComponent}
            columns={lotCols}
            data={data}
            progressPending={loading}
        />
    </div>
    </>
  )
}

export default Lots;
