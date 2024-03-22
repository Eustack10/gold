import React, { useState } from 'react'
import { Button, Modal } from 'react-bootstrap'
import { useForm } from 'react-hook-form';

export default function LotModal({show, handleClose, lots, selectedCheck, setSelectedCheck}) {
   const [selectedLot, setSelectedLot] = useState([]);
  const submitSelectedLot = (e) =>{
    setSelectedCheck(selectedLot);
    handleClose();
  }
  const handleChange = (e) => {
      // Destructuring
      const { value, checked } = e.target;
      if (checked) {
          setSelectedLot([...selectedLot, value]);
      }
      else {
          setSelectedLot([...selectedLot.filter(val => val != value)]);
      }
  };
  return (
    <Modal show={show} onHide={handleClose} size='xl'>
        <Modal.Header>
          <Modal.Title>Lots</Modal.Title>
        </Modal.Header>
        <Modal.Body>

        <form class="table-responsive" id='lot' onSubmit={submitSelectedLot}>
    
    <table class="table" id='exampleee'>
        <thead>
            <tr>
                <td>#</td>
                <td>ID</td>
                <td>Code</td>
                <td>Name</td>
                <td>Weight</td>
                <td>Unit</td>
                <td>Gram</td>
                <td>Unit Price</td>
                <td>Price</td>
                <td>Amount</td>
            </tr>
        </thead>
        <tbody>
            {
                lots.map(val => (
                    <tr key={val.id}>
                        <td>
                            <input type="checkbox" name="lots_id" onClick={
                                            handleChange
                                        } value={val.name}/>
                        </td>
                        <td>{val.id}</td>
                        <td>{val.code}</td>
                        <td>{val.name}</td>
                        <td>{val.weight}</td>
                        <td>{val.unit}</td>
                        <td>{val.gram}</td>
                        <td>{val.unit_price}</td>
                        <td>{val.price}</td>
                        <td>{val.amount}</td>
                    </tr>
                ))
            }
        </tbody>
    </table>
    <Button variant="secondary" onClick={handleClose}>
            Close
          </Button>
          <Button variant="primary" formTarget='lot' type='submit'>
            Save Changes
          </Button>
</form>
        </Modal.Body>
       
    </Modal>
  )
}
