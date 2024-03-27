import React, { useState } from 'react'
import { Button, Modal } from 'react-bootstrap'
import DataTable from 'react-data-table-component';
import { useForm } from 'react-hook-form';

export default function LotModal({show, handleClose, lots, selectedLotRow, setSelectedLotRow}) {
  const handleChange = (selectedRow) => {
      setSelectedLotRow(selectedRow.selectedRows);
  };

  const columns = [
    {
        name: 'ID',
        selector: row => row.id,
    },
    {
        name: 'Code',
        selector: row => row.code,
    },
    {
        name: 'Name',
        selector: row => row.name,
    },
    {
        name: 'Weight',
        selector: row => row.weight,
        hide: 'sm'
    },
    {
        name: 'Unit',
        selector: row => row.unit,
        hide: 'sm'
    },
    {
        name: 'Gram',
        selector: row => row.gram,
        hide: 'sm'
    },
    {
        name: 'Unit Price',
        selector: row => row.unit_price,
        hide: 'sm'
    },
    {
        name: 'Price Amount',
        selector: row => row.price_amount,
        hide: 'sm'
    },
    {
        name: 'Cert No.',
        selector: row => row.cert_no,
        hide: 'sm'
    },
];

const ExpandedComponent = ({ data }) => (
  <div className='d-flex ml-5 flex-column pl-3 d-lg-none'>
      <div className='row border d-lg-none'>
          <div className='col-4 col-lg-2'>Weight</div>
          <div className='col'>{data?.weight}</div>
      </div>

      <div className='row border d-lg-none'>
          <div className='col-4 col-lg-2'>Unit</div>
          <div className='col'>{data?.unit}</div>
      </div>

      <div className='row border d-lg-none'>
          <div className='col-4 col-lg-2'>Gram</div>
          <div className='col'>{data?.gram}</div>
      </div>

      <div className='row border'>
          <div className='col-4 col-lg-2'>Unit Price</div>
          <div className='col'>{data?.unit_price}</div>
      </div>


      <div className='row border'>
          <div className='col-4 col-lg-2'>Price Amount</div>
          <div className='col'>{data?.price_amount}</div>
      </div>


      <div className='row border'>
          <div className='col-4 col-lg-2'>Cert No.</div>
          <div className='col'>{data?.cert_no}</div>
      </div>

  </div>
);
const selectedRows = row => selectedLotRow.map(val => val.id).includes(row.id);
  return (
    <Modal show={show} onHide={handleClose} size='xl'>
        <Modal.Header>
          <Modal.Title>Lots</Modal.Title>
        </Modal.Header>
        <Modal.Body>

        <DataTable
      columns={columns}
      data={lots}
      selectableRows
      onSelectedRowsChange={handleChange}

      expandableRows
      pagination={false}
      expandableRowsComponent={ExpandedComponent}
      // selectableRowSelected={selectedRows}
    />
          <Button variant="secondary" onClick={handleClose}>
            Close
          </Button>
          <Button variant="primary" onClick={handleClose} formTarget='lot' type='submit'>
            Save Changes
          </Button>
        </Modal.Body>
       
    </Modal>
  )
}
