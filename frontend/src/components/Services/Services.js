import React, {Component, Fragment} from 'react';
import  {Col, Container, Row} from "react-bootstrap";
import graphicsLogo from "../../asset/images/graphics.svg"
import mobileLogo from "../../asset/images/mobile.svg"
import webLogo from "../../asset/images/web.svg"

import planning from  '../../asset/images/planning.png';
import analysisIcon from  '../../asset/images/analysisIcon.png';
import requirement from  '../../asset/images/requirment.png';
import design from  '../../asset/images/design.png';
import development from  '../../asset/images/development.png';
import testing from  '../../asset/images/tesing.png';
import setting from  '../../asset/images/setting.png';
import support from  '../../asset/images/support.png';
import deploymentIcon from  '../../asset/images/deploy.png';

class Services extends Component {
    render() {
        return (
            <Fragment>
                <Container className="text-center" >
                    <h1 className="serviceMainTitle" >My Services</h1>
                    <Row>

                        <Col lg={4} md={6} sm={12}  >
                            <div className="serviceCard text-center" >
                                <img src={webLogo} />
                                <h2 className="serviceName" > Web Development </h2>
                                <p className="serviceDescription" >I design and develop static and dynamic web site as per you requierments as we belive "Web is world's next home".</p>
                            </div>
                        </Col>
                        <Col lg={4} md={6} sm={12} >
                            <div className="serviceCard text-center" >
                                <img src={mobileLogo} />
                                <h2 className="serviceName" >Apps Development </h2>
                                <p className="serviceDescription" >I build native and cross platfrom mobile app for your business and instiution as per you requierments.</p>
                            </div>
                        </Col>
                        <Col lg={4} md={6} sm={12} >
                            <div className="serviceCard text-center" >
                                <img src={graphicsLogo} />
                                <h2 className="serviceName" > Graphics Designer </h2>
                                <p className="serviceDescription" >I design morden user interface and other graphics components for your business and instiution.</p>
                            </div>
                        </Col>

                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default Services;