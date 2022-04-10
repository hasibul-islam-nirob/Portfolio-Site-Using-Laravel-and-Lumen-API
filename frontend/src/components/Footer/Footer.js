import React, {Component, Fragment} from 'react';
import {Col, Container, Row} from "react-bootstrap";
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {faFacebook, faGithub, faLinkedin, faYoutube} from "@fortawesome/free-brands-svg-icons";
import {faEnvelope, faPhone, faHome} from "@fortawesome/free-solid-svg-icons";
import {Link} from "react-router-dom";
import RestGetClient from "../../RestApi/RestClient";
import AppURL from "../../RestApi/AppUrl";

class Footer extends Component {

    constructor() {
        super();
        this.state={
            address:"",
            email:"",
            number:"",
            fb_url:"",
            li_url:"",
            git_url:"",
            yt_url:""
        }
    }

    componentDidMount() {
        RestGetClient.GetRequest(AppURL.allFooter).then(result=>{
            this.setState({
                address:result[0]['address'],
                email:result[0]['email'],
                number:result[0]['number'],
                fb_url:result[0]['fb_url'],
                li_url:result[0]['li_url'],
                git_url:result[0]['git_url'],
                yt_url:result[0]['yt_url'],
            })
        })
    }

    render() {
        return (
            <Fragment>
                <Container fluid={true} className="footerSection text-center p-5 " >
                    <Row>
                        <Col lg={3} md={6} sm={12} className="p-3 text-justify " >
                            <h1 className="footerMainTitle" >Follow</h1>
                            <a className="footerDescLink" target="_blank" href={'//'+this.state.fb_url}> <FontAwesomeIcon icon={faFacebook} /> FaceBook</a> <br/>
                            <a className="footerDescLink" target="_blank" href={'//'+this.state.li_url}> <FontAwesomeIcon icon={faLinkedin} /> Linkedin</a><br/>
                            <a className="footerDescLink" target="_blank" href={'//'+this.state.git_url}> <FontAwesomeIcon icon={faGithub} /> GitHub</a><br/>
                            <a className="footerDescLink" target="_blank" href={'//'+this.state.yt_url}> <FontAwesomeIcon icon={faYoutube} /> Youtube</a>
                        </Col>

                        <Col lg={3} md={6} sm={12} className="p-3 text-justify " >
                            <h1 className="footerMainTitle" >Address</h1>
                            <p className="footerAddressDesc" ><FontAwesomeIcon icon={faHome} /> {this.state.address}</p>
                            <p className="footerAddressDesc" ><FontAwesomeIcon icon={faEnvelope} />  {this.state.email}</p>
                            <p className="footerAddressDesc" ><FontAwesomeIcon icon={faPhone} />  {this.state.number}</p>
                        </Col>

                        <Col lg={3} md={6} sm={12} className="p-3 text-justify " >
                            <h1 className="footerMainTitle" >Information</h1>
                            <Link className="footerDescLink" to="/about"> About Me</Link><br/>
                            <Link className="footerDescLink" to=""> My Resume</Link><br/>
                            <Link className="footerDescLink" to="/contact"> Contact Me</Link>
                        </Col>

                        <Col lg={3} md={6} sm={12} className="p-3 text-justify " >
                            <h1 className="footerMainTitle" >Legal</h1>
                            <Link className="footerDescLink" to="/privacyPolicy"> Privacy Policy </Link><br/>
                            <Link className="footerDescLink" to="/refund"> Refund Policy </Link><br/>
                            <Link className="footerDescLink" to="/termsCondition"> Terms & Condition </Link>
                        </Col>
                    </Row>
                </Container>

                <Container fluid={true} className="text-center" >
                    <Row className="bg-dark" >
                        <Col lg={12} md={12} sm={12} >
                            <p className="copyRightTitle" > &copy; All Reserved 2021 </p>
                        </Col>
                    </Row>
                </Container>

            </Fragment>
        );
    }
}

export default Footer;