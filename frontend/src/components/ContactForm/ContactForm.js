import React, {Component, Fragment} from 'react';
import {Button, Col, Container, Form, Row} from "react-bootstrap";
import {FontAwesomeIcon} from "@fortawesome/react-fontawesome";
import {faEnvelope, faExclamationCircle, faHome, faPhone} from "@fortawesome/free-solid-svg-icons";

class ContactForm extends Component {
    constructor(props) {
        super(props);
        this.state={
            fAddress:"",
            fMail:" ",
            fMobile:" ",
            buttonName:"Send",
            nameEr:"",
            emailEr:"",
            msgEr:"",
            loading:true,
            error:false,

            errorIconName:"contactError d-none",
            errorIconEmail:"contactError d-none",
        }
    };

    onFormFormat=()=>{
        let nameVal  = document.getElementById("name").value;
        let emailVal  = document.getElementById("email").value;

        if (nameVal.length > 0){
            let nameValidation=/^([a-zA-Z ]){2,20}$/;
            if(!nameValidation.test(nameVal)){
                this.setState({nameEr:"Name Isn't Valid", errorIconName:"contactError"});
            }else{
                this.setState({nameEr:" ", errorIconName:"contactError d-none"});
            }
        }
        if(emailVal.length > 0){
            let mailValidation=/\S+@\S+\.\S+/;
            if(!mailValidation.test(emailVal)){
                this.setState({emailEr:"Mail Isn't Valid", errorIconEmail:"contactError"});
            }else{
                this.setState({emailEr:" ",  errorIconEmail:"contactError d-none"});
            }
        }

    }

    render() {
        return (
            <Fragment>
                <Container className="contactFormSection" >
                    <Row>

                        <Col lg={6} md={6} sm={12}>
                            <h1 className="contactFormTitle" >Quick Contact</h1>

                            <Form>
                                <Form.Group>
                                    <Form.Label className="contactFormSubTitle" >Your Name</Form.Label>
                                    <Form.Control onChange={this.onFormFormat} id="name" type="text" placeholder="Your Name" />
                                    <p className="errorIcon" > <FontAwesomeIcon className={this.state.errorIconName} icon={faExclamationCircle}/>  {this.state.nameEr}</p>
                                </Form.Group>

                                <Form.Group>
                                    <Form.Label className="contactFormSubTitle" >Email Address</Form.Label>
                                    <Form.Control onChange={this.onFormFormat} id="email" type="email" placeholder="Your Email" />
                                    <p className="errorIcon" ><FontAwesomeIcon className={this.state.errorIconEmail} icon={faExclamationCircle}/>  {this.state.emailEr}</p>
                                </Form.Group>

                                <Form.Group>
                                    <Form.Label className="contactFormSubTitle" >Massage</Form.Label>
                                    <Form.Control id="msg" as="textarea" rows={4} />
                                </Form.Group>

                                <Button variant="primary" type="submit">
                                    Send
                                </Button>
                            </Form>
                        </Col>

                        <Col lg={6} md={6} sm={12}>
                            <h1 className="contactFormTitle" >Discussion Any Time</h1>
                            <p className="contactFormDesc" ><FontAwesomeIcon icon={faHome} /> 177 Tejkuni Para, Tejgaon. Dhaka-1215</p>
                            <p className="contactFormDesc" ><FontAwesomeIcon icon={faEnvelope} /> hasibolislamnirob@gmail.com</p>
                            <p className="contactFormDesc" ><FontAwesomeIcon icon={faPhone} /> +8801819979441</p>
                        </Col>

                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default ContactForm;