import React, {Component, Fragment} from 'react';
import {Col, Container, Row} from "react-bootstrap";
import notFound from '../../asset/images/notFoundimg.jpg';

class NotFound extends Component {
    render() {
        return (
            <Fragment>
                <Container className="notFoundSection text-center" >
                    <Row>
                        <Col>
                            <img className="notFoundImg" src={notFound} alt=""/>
                        </Col>
                    </Row>
                </Container>
            </Fragment>
        );
    }
}

export default NotFound;