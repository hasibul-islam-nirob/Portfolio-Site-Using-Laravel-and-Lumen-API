import React, {Component, Fragment} from 'react';

import {Col, Container, Row,Button} from "react-bootstrap";
import {Link} from "react-router-dom";
import RestGetClient from "../../RestApi/RestClient";
import AppURL from "../../RestApi/AppUrl";

class TopBanner extends Component {

    constructor() {
        super();
        this.state={
            title:"",
            subTitle:""
        }
    }

    componentDidMount() {
        RestGetClient.GetRequest(AppURL.homeTitleSubTitle)
            .then(result=>{
                this.setState({
                    title:result[0]['top_baner_title'],
                    subTitle:result[0]['top_baner_sub_title']
                });
            })
    }

    render() {
        return (
            <div>
                <Fragment>
                    <Container fluid={true} className="topFixedBanner p-0">
                        <div className="topBannerOverlay" >
                            <Container className="topContent">
                                <Row>
                                    <Col className="text-center">
                                        <h1 className="topTittle" >{this.state.title}</h1>
                                        <h3 className="topSubTittle">{this.state.subTitle}</h3>
                                        <Button variant="primary"><Link className="linkButton" to="/contact"> Contact Me</Link></Button>
                                    </Col>
                                </Row>
                            </Container>
                        </div>
                    </Container>
                </Fragment>
            </div>
        );
    }
}

export default TopBanner;