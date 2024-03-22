import React, { useRef, useState } from "react";
import { createRoot } from "react-dom/client";
import Lots from "./component/Lots";
/* @params blade_gold */
const Weight = () => {

    return (
        <>
            <div>
                <h2 className="text-primary">Create jellewery</h2>
            </div>
            <div className="row p-0 m-0">
                <div className="col-12 col-sm-12 col-md-9 col-lg-9 p-0 m-0">
                    {/* for top input */}
                    <div className="d-block d-sm-block d-md-flex d-lg-flex flex-wrap top-input">
                        <div className="d-flex d-sm-flex d-md-block d-lg-block justify-content-between align-items-center">
                            <small className="d-block">Date</small>
                            <input
                                type="date"
                                className="w-100  btn btn-sm bg-white border border-muted"
                                defaultValue=""
                            />
                        </div>
                        <div className="d-flex d-sm-flex d-md-block  d-lg-block align-items-center justify-content-between">
                            <small className="d-block">Code</small>
                            <input
                                type="text"
                                className="w-100  btn btn-sm bg-white border border-muted"
                                defaultValue=""
                            />
                        </div>
                        <div className="d-flex d-sm-flex d-md-block d-lg-block align-items-center justify-content-between">
                            <small className="d-block">Name</small>
                            <input
                                type="text"
                                className="w-100  btn btn-sm bg-white border border-muted"
                                defaultValue=""
                            />
                        </div>
                    </div>

                    <div className="mt-3">
                        <ul className="nav nav-tabs" id="myTab" role="tablist">
                            <li className="nav-item">
                                <a
                                    className="nav-link text-dark active"
                                    id="home-tab"
                                    data-toggle="tab"
                                    href="#home"
                                    role="tab"
                                    aria-controls="home"
                                    aria-selected="true"
                                >
                                    Detail
                                </a>
                            </li>
                            <li className="nav-item">
                                <a
                                    className="nav-link text-dark"
                                    id="profile-tab"
                                    data-toggle="tab"
                                    href="#profile"
                                    role="tab"
                                    aria-controls="profile"
                                    aria-selected="false"
                                >
                                    Inventory
                                </a>
                            </li>

                            <li className="nav-item ">
                                <a
                                    className="nav-link text-dark"
                                    id="contact-tab"
                                    data-toggle="tab"
                                    href="#barcode"
                                    role="tab"
                                    aria-controls="contact"
                                    aria-selected="false"
                                >
                                    Barcode
                                </a>
                            </li>
                            <li className="nav-item ">
                                <a
                                    className="nav-link text-dark"
                                    id="contact-tab"
                                    data-toggle="tab"
                                    href="#image"
                                    role="tab"
                                    aria-controls="contact"
                                    aria-selected="false"
                                >
                                    Image
                                </a>
                            </li>
                        </ul>
                        <div className="tab-content" id="myTabContent">
                            <div
                                className="tab-pane fade show active"
                                id="home"
                                role="tabpanel"
                                aria-labelledby="home-tab"
                            >
                                <div className="row mt-2 p-0 m-0">
                                    <div className="col-12 col-md-3 col-lg-3 p-0 m-0">
                                        <div className="card p-2 bg-white">
                                            <table
                                                className="tbl-lot"
                                                style={{
                                                    borderSpacing: 7,
                                                    borderCollapse: "separate",
                                                }}
                                            >
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Gold Metal
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <select
                                                            name=""
                                                            className="text-sm  w-90"
                                                        >
                                                            {blade_gold.map(
                                                                (d) => (
                                                                    <option
                                                                        key={
                                                                            d.id
                                                                        }
                                                                        value={
                                                                            d.id
                                                                        }
                                                                    >
                                                                        {d.name}
                                                                    </option>
                                                                )
                                                            )}
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Price
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <input
                                                            type="text"
                                                            className="text-sm w-90 p-0"
                                                        />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Category
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <select name="" className="text-sm w-90">
                                                            {
                                                                categories.map(val => (
                                                                    <option key={val.id} value={val.id}>
                                                                        {val.name}
                                                                    </option>
                                                                ))
                                                            }
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style={{ width: 100 }}>
                                                        <span className="text-sm">
                                                            Product Type
                                                        </span>
                                                    </td>
                                                    <td>
                                                       
                                                    <select name="" className="text-sm w-90">
                                                            {
                                                                product_types.map(val => (
                                                                    <option key={val.id} value={val.id}>
                                                                        {val.name}
                                                                    </option>
                                                                ))
                                                            }
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Color
                                                        </span>
                                                    </td>
                                                    <td>
                                                        
                                                    <select name="" className="text-sm w-90">
                                                            {
                                                                colors.map(val => (
                                                                    <option key={val.id} value={val.id}>
                                                                        {val.name}
                                                                    </option>
                                                                ))
                                                            }
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Brand:
                                                        </span>
                                                    </td>
                                                    <td>
                                                        
                                                        <select name="" className="text-sm w-90">
                                                            {
                                                                brands.map(val => (
                                                                    <option key={val.id} value={val.id}>
                                                                        {val.name}
                                                                    </option>
                                                                ))
                                                            }
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span className="text-sm">
                                                            Size:
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <input
                                                            type="text"
                                                            className="text-sm w-90 p-0"
                                                        />
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div className="col-12 col-md-9 col-lg-9 p-0 m-0">
                                        <div className="card bg-white p-2">
                                            <div className="d-none d-sm-none d-md-block d-lg-block">
                                                <div className="row ">
                                                    <div className="col-3">
                                                        <span>Weight</span>
                                                    </div>
                                                    <div className="col-9 d-flex">
                                                        <div
                                                            style={{
                                                                width: "20%",
                                                            }}
                                                        >
                                                            Gram
                                                        </div>
                                                        <div
                                                            style={{
                                                                width: "20%",
                                                            }}
                                                        >
                                                            Kyat
                                                        </div>
                                                        <div
                                                            style={{
                                                                width: "20%",
                                                            }}
                                                        >
                                                            Pae
                                                        </div>
                                                        <div
                                                            style={{
                                                                width: "20%",
                                                            }}
                                                        >
                                                            Ywe
                                                        </div>
                                                        <div
                                                            style={{
                                                                width: "20%",
                                                            }}
                                                        >
                                                            Amount
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {/*   Jewellery Net Weight */}
                                            <div className="row mt-3 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-primary text-sm">
                                                        Jewellery Net Weight
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}
                                                <div className="col-12 d-block d-sm-block d-md-none d-lg-none">
                                                    <span className="text-primary text-sm">
                                                        Jewellery Net Weight
                                                    </span>
                                                </div>
                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Gram
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={0.001}
                                                            placeholder="gram"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Kyat
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Pae
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Ywe
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={"3,000,000"}
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/*   Jewellery Net Weight */}

                                            {/*    Net Gold Weight */}
                                            <hr className="p-0 m-0 mt-2" />
                                            <div className="row mt-2 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-primary text-sm">
                                                        Net Gold Weight
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}
                                                <div className="col-12 d-block d-sm-block d-md-none d-lg-none">
                                                    <span className="text-primary text-sm">
                                                        Net Gold Weight
                                                    </span>
                                                </div>
                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex flex-wrap weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Gram
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Kyat
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Pae
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Ywe
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        className="mt-2 mt-sm-2 mt-md-0 mt-lg-0"
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Amount
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={"3,000,000"}
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/*    Net Gold Weight */}

                                            {/* Decrease Gold Weight */}

                                            <div className="row mt-2 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-primary text-sm">
                                                        Decrease Gold Weight
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}
                                                <div className="col-12 d-block d-sm-block d-md-none d-lg-none">
                                                    <span className="text-primary text-sm">
                                                        Decrease Gold Weight
                                                    </span>
                                                </div>
                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex flex-wrap weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Gram
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Kyat
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Pae
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Ywe
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        className="mt-2 mt-sm-2 mt-md-0 mt-lg-0"
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Amount
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={"3,000,000"}
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/* Decrease Gold Weight */}

                                            {/* total gold weight */}
                                            <hr className="p-0 m-0 mt-2" />
                                            <div className="row mt-2 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-dark text-sm">
                                                        Total Gold Weight
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}
                                                <div className="col-12 d-block d-sm-block d-md-none d-lg-none">
                                                    <span className="text-dark text-sm">
                                                        Total Gold Weight
                                                    </span>
                                                </div>
                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Gram
                                                        </small>
                                                        <input
                                                            disabled
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Kyat
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Pae
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Ywe
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={"3,000,000"}
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/* total gold weight */}

                                            {/* total Gems weight */}
                                            <div className="row mt-2 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-dark text-sm">
                                                        Total Gems Weight
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}
                                                <div className="col-12 d-block d-sm-block d-md-none d-lg-none">
                                                    <small className="text-dark">
                                                        Total Gems Weight
                                                    </small>
                                                </div>
                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Gram
                                                        </small>
                                                        <input
                                                            disabled
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Kyat
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Pae
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Ywe
                                                        </small>
                                                        <input
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                            value={"3,000,000"}
                                                            disabled
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/* total Gems weight */}

                                            {/* total Gems weight */}
                                            <div className="row mt-2 weight-container">
                                                <div className="col-3 d-none d-sm-none d-md-block d-lg-block">
                                                    <span className="text-dark text-sm">
                                                        Total Pcs
                                                    </span>
                                                </div>
                                                {/* for mobile title  */}

                                                <div className="col-12 col-sm-12 col-md-9 col-lg-9 d-flex weight-input-container">
                                                    <div
                                                        style={{ width: "20%" }}
                                                    >
                                                        <small className="d-block d-sm-block d-md-none d-lg-none">
                                                            Total Pcs
                                                        </small>
                                                        <input
                                                            disabled
                                                            style={{
                                                                fontSize:
                                                                    "14px",
                                                            }}
                                                            className="w-90 p-0"
                                                            type="text"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            {/* total pcs  */}
                                        </div>
                                    </div>
                                </div>

                                {/* for lot */}
                                <Lots/>
                            </div>

                            {/* inventory */}
                            <div
                                className="tab-pane fade"
                                id="profile"
                                role="tabpanel"
                                aria-labelledby="profile-tab"
                            >
                                <div className="p-2 bg-white">
                                    <div className="row">
                                        <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div className="form-group">
                                                <label htmlFor="">
                                                    Goldsmith
                                                </label>
                                                <select
                                                    name=""
                                                    className="form-control"
                                                >
                                                    <option value="">
                                                        choose
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div className="form-group">
                                                <label htmlFor="">
                                                    Received Date
                                                </label>
                                                <input
                                                    type="date"
                                                    className="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div className="form-group">
                                                <label htmlFor="">Ref No</label>
                                                <input
                                                    type="text"
                                                    className="form-control"
                                                />
                                            </div>
                                        </div>
                                        <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <div className="form-group">
                                                <label htmlFor="">Remark</label>
                                                <textarea className="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 className="text-primary">Hock</h3>
                                        <div className="row">
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Weight(gram)
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Gems Pcs
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Cost
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Remark
                                                    </label>
                                                    <textarea className="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 className="text-primary">
                                            Item Info
                                        </h3>
                                        <div className="row">
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Item Status
                                                    </label>
                                                    <select
                                                        className="form-control"
                                                        id=""
                                                    >
                                                        <option value="">
                                                            Active
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Location
                                                    </label>
                                                    <select
                                                        className="form-control"
                                                        id=""
                                                    >
                                                        <option value="">
                                                            choose location
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Cost
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Counter
                                                    </label>
                                                    <select
                                                        className="form-control"
                                                        id=""
                                                    >
                                                        <option value="">
                                                            choose location
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                {" "}
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Opening Stock
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                {" "}
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Current Stock
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                {" "}
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Exchange(%)
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                            <div className="col-12 col-sm-12 col-md-3 col-lg-3">
                                                {" "}
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Buy Back Value(%)
                                                    </label>
                                                    <input
                                                        type="number"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 className="text-primary">
                                            Item Info
                                        </h3>
                                        <div className="row">
                                            <div className="col-12 col-sm-12 col-md-6">
                                                <div className="form-group">
                                                    <label htmlFor="">
                                                        Old Code
                                                    </label>
                                                    <input
                                                        type="text"
                                                        className="form-control"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/* end inventory */}
                            <div
                                className="tab-pane fade"
                                id="contact"
                                role="tabpanel"
                                aria-labelledby="contact-tab"
                            >
                                ...
                            </div>
                            <div
                                className="tab-pane fade"
                                id="barcode"
                                role="tabpanel"
                                aria-labelledby="contact-tab"
                            >
                                <div className="p-2 bg-white">
                                    <div className="row">
                                        <div className="col-12 col-sm-12 col-md-6">
                                            <h4>Barcode Front</h4>
                                            <img
                                                className="w-100"
                                                src="https://barcode.tec-it.com/barcode.ashx?data=ABC-abc-1234&code=Code128&translate-esc=on"
                                                alt=""
                                            />
                                        </div>
                                        <div className="col-12 col-sm-12 col-md-6">
                                            <h4>Barcode Back</h4>
                                            Data String
                                        </div>
                                        <div className="col-12 ">
                                            <hr />
                                            <img
                                                className="w-25"
                                                src="https://developers.google.com/static/chart/infographics/images/chart_527.png"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {/* <div
                                className="tab-pane fade"
                                id="contact"
                                role="tabpanel"
                                aria-labelledby="contact-tab"
                            >
                                ...
                            </div> */}

                            <div
                                className="tab-pane fade"
                                id="image"
                                role="tabpanel"
                                aria-labelledby="contact-tab"
                            >
                                <div className="p-2 bg-white">

                                    <div class="mb-4">
                                        <label for="images">Images</label>
                                        <div className="input-images mt-2" id="images"></div>
                                    </div>
                                    <input type="file" />

                                    <div>
                                        <img
                                            src="https://images.naptol.com/usr/local/csp/staticContent/product_images/horizontal/375x375/Shubh-Muhurat-Jewellery-Collection-01.jpg"
                                            className="img-thumbnail "
                                            style={{ height: 100 }}
                                        />
                                        <img
                                            src="https://images.naptol.com/usr/local/csp/staticContent/product_images/horizontal/375x375/Shubh-Muhurat-Jewellery-Collection-01.jpg"
                                            className="img-thumbnail "
                                            style={{ height: 100 }}
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* for summary view */}
                <div className="col-12 col-sm-12 col-md-3 col-lg-3 p-0 m-0">
                    <div className="card p-3 summary">
                        <div className="row">
                            <div className="col-12">
                                <h4 className="pt-3">Item Pricing</h4>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col mt-2">Gold Amount (1+2)</div>
                            <div className="col-6 mt-2">
                                <input
                                    type="text"
                                    disabled=""
                                    defaultValue="88,200"
                                    className="w-100"
                                />
                            </div>
                            <div className="col-6 mt-2">Germs Amount</div>
                            <div className="col-6 mt-2">
                                <input
                                    type="text"
                                    disabled=""
                                    defaultValue="143,280"
                                    className="w-100"
                                />
                            </div>
                            <div className="col-6 mt-2">Other Cost</div>
                            <div className="col-6 mt-2">
                                <input type="text" className="w-100" />
                            </div>
                            <div className="col-6 mt-2">Workmanship</div>
                            <div className="col-6 mt-2">
                                <input type="text" className="w-100" />
                            </div>
                            <div className="col-6 mt-2">Fixed Amount</div>
                            <div className="col-6 mt-2">
                                <input type="text" className="w-100" />
                            </div>
                        </div>
                        <hr />
                        <div className="row">
                            <div className="col-6 mt-2">
                                <h4>Total Cost</h4>
                            </div>
                            <div className="col-6 mt-2">
                                <input
                                    type="text"
                                    disabled=""
                                    defaultValue="388,200"
                                    className="w-100"
                                />
                            </div>
                            <div className="col-6 mt-2">
                                Margin{" "}
                                <input type="number" style={{ width: 40 }} /> %
                            </div>
                            <div className="col-6 mt-2">
                                <input
                                    type="text"
                                    disabled=""
                                    defaultValue="383,280"
                                    className="w-100"
                                />
                            </div>
                            <div className="col-6 mt-2">Opening Sale Price</div>
                            <div className="col-6 mt-2">
                                <input type="text" className="w-100" />
                            </div>
                            <div className="col-6 mt-2">Minimum Sale Price</div>
                            <div className="col-6 mt-2">
                                <input type="text" className="w-100" />
                            </div>
                            <div className="col-6 mt-2">Remark</div>
                            <div className="col-6 mt-2">
                                <textarea
                                    name=""
                                    className="w-100"
                                    id=""
                                    cols={30}
                                    rows={5}
                                    defaultValue={""}
                                />
                            </div>
                        </div>
                        <hr />
                        <div className="row">
                            <div className="col-12">
                                <button className="btn btn-warning btn-block">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
};

createRoot(document.querySelector("#root")).render(<Weight />);
