import React, { Component, Fragment } from "react";
import Header from "../components/header";
import 'isomorphic-fetch';
import styled from 'styled-components';
// export default () => <h1>hello world</h1>;

// Create a Title component that'll render an <h1> tag with some styles
/*const Title = styled.h1`
  font-size: 1.5em;
  text-align: center;
  color: palevioletred;
`;

// Create a Wrapper component that'll render a <section> tag with some styles
const Wrapper = styled.section`
  padding: 4em;
  background: papayawhip;
`;

// Use Title and Wrapper like any other React component – except they're styled!
render(
  <Wrapper>
    <Title>
      Hello World!
    </Title>
  </Wrapper>
);*/
class Home extends Component {
/*    
const Home = ({nomeBairro}) =>(
    <div>
    {
        <h1 key={nomeBairro.bairro}>{nomeBairro.bairro}</h1>
    }
    </div>
);
*/

    static async getInitialProps(){
        const response = await fetch('http://localhost:8880/graphql?query=query{anuncio(id:%201){bairro}}');
        const data = await response.json();
        const nomeBairro = (data.data.anuncio);
        console.log(nomeBairro);
        return {nomeBairro};
        
    }
    constructor(props){
        super(props);
    }
    render(){

        return(
            <Fragment>
                <Header>{this.props.nomeBairro.bairro}</Header>
                <div>{this.props.nomeBairro.bairro}</div>
            </Fragment>
        )
    }

}
export default Home;