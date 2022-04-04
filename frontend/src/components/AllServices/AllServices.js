import React, {Component, Fragment} from 'react';
import {Col, Container, Row} from "react-bootstrap";
import webLogo from "../../asset/images/web.svg";
import mobileLogo from "../../asset/images/mobile.svg";
import graphicsLogo from "../../asset/images/graphics.svg";
import analysisIcon from "../../asset/images/analysisIcon.png";
import design from "../../asset/images/design.png";
import development from "../../asset/images/development.png";
import testing from "../../asset/images/tesing.png";
import deploymentIcon from "../../asset/images/deploy.png";
import support from "../../asset/images/support.png";

class AllServices extends Component {
    render() {
        return (
            <Fragment>
                <Container className=" allServicesSection text-center" >
                    <Row>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={analysisIcon} alt="Planing-Icon"/>
                                <h4 className="servicesName">Requirement Analysis</h4>
                                <p className="serviceDescription"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                            </div>
                        </Col>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={design} alt="Planing-Icon"/>
                                <h4 className="servicesName">Design</h4>
                                <p className="serviceDescription">I design morden user interface and other graphics components for your business and instiution.</p>
                            </div>
                        </Col>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={development} alt="Planing-Icon"/>
                                <h4 className="servicesName">Development</h4>
                                <p className="serviceDescription"> I design and develop static and dynamic web site as per you requierments as we belive "Web is world's next home" </p>
                            </div>
                        </Col>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={testing} alt="Planing-Icon"/>
                                <h4 className="servicesName">Testing</h4>
                                <p className="serviceDescription"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                            </div>
                        </Col>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={deploymentIcon} alt="Planing-Icon"/>
                                <h4 className="servicesName">Deployment</h4>
                                <p className="serviceDescription"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                            </div>
                        </Col>

                        <Col className="text-center" lg={4} md={6} sm={12}>
                            <div className="serviceCard text-center">
                                <img className="servicesImg" src={support} alt="Planing-Icon"/>
                                <h4 className="servicesName">Support</h4>
                                <p className="serviceDescription"> Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                            </div>
                        </Col>
                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default AllServices;