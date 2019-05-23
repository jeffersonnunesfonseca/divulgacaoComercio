import React, { Component, Fragment } from "react";
import styled from 'styled-components';

class Header extends Component{
    constructor(props,context){
        super(props,context)
    }

    render(){
        const Bloco = styled.div`
            background-color: red;
            width: 100%;
            color:white;
            height: 40px;
        `;

        return(
            <Fragment>
                <Bloco>{this.props.children}</Bloco> 
            </Fragment>
        );
    }

}

export default Header;