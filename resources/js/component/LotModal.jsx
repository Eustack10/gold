import React, { useState } from 'react'
import { Button, Modal } from 'react-bootstrap'

export default function LotModal({show, handleClose, lots, selectedCheck}) {
   
  return (
    <Modal show={show} onHide={handleClose} size='xl'>
        <Modal.Header>
          <Modal.Title>Lots</Modal.Title>
        </Modal.Header>
        <Modal.Body>

        <div class="table-responsive">
    
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
                            <input type="checkbox" name="" id="" value={val.id}/>
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
</div>
        </Modal.Body>
        <Modal.Footer>
          <Button variant="secondary" onClick={handleClose}>
            Close
          </Button>
          <Button variant="primary" onClick={handleClose}>
            Save Changes
          </Button>
        </Modal.Footer>
    </Modal>
  )
}
