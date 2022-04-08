import React, {Component, Fragment} from 'react';
//import "../../asset/css/bootstrap.min.css";
import {Col, Container, Row} from "react-bootstrap";
import {Bar, BarChart, ResponsiveContainer, Tooltip, XAxis} from "recharts";
import RestClient from "../../RestApi/RestClient";
import AppUrl from "../../RestApi/AppUrl";


class Analysis extends Component {

    constructor() {
        super();
        this.state = {
            analysisData:[
                {Technology:'Java', Project:20},
                {Technology:'Python', Project:10},
                {Technology:'Php', Project:50},
                {Technology:'SQL', Project:45},
                {Technology:'C++', Project:85},
                {Technology:'JavaScript', Project:90},
                {Technology:'C#', Project:30},
                {Technology:'BootStrap', Project:95}
            ],
            subTitle:""
        }
    }

    render() {
        var blue ="rgba(0,115,230,0.8)";
        return (
            <Fragment>
                <Container className="text-center">
                    <h1 className="analysisMainTitle" >Technology Used</h1>
                    <Row>
                        <Col lg={6} md={12} sm={12} >
                            <ResponsiveContainer width="100%" height="100%">
                                <BarChart width={100} height={300} data={this.state.analysisData} >
                                    <XAxis dataKey="Technology" />
                                    <Tooltip/>
                                    <Bar dataKey="Project" fill={blue} >

                                    </Bar>
                                </BarChart>
                            </ResponsiveContainer>
                        </Col>
                        <Col lg={6} md={12} sm={12} >
                            <p className="text-justify analysisDescription" >{this.state.subTitle}</p>
                        </Col>
                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default Analysis;