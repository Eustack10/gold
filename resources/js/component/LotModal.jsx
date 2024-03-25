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
    },
    {
        name: 'Unit',
        selector: row => row.unit,
    },
    {
        name: 'Gram',
        selector: row => row.gram,
    },
    {
        name: 'Unit Price',
        selector: row => row.unit_price,
    },
    {
        name: 'Price Amount',
        selector: row => row.price_amount,
    },
    {
        name: 'Cert No.',
        selector: row => row.cert_no,
    },
];

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
