import React from 'react';
import 'isomorphic-fetch';
// export default () => <h1>hello world</h1>;

const Home = ({repositories}) =>(
    <div>
    {
        repositories.map(
            repo => <h1 key={repo.id}> {repo.name} </h1>
        )
    }
    </div>
);

Home.getInitialProps = async () => {
    const response = await fetch('https://api.github.com/orgs/rocketseat/repos');
    const repositories = await response.json();
    console.log(repositories);
    return {repositories};
    
}

export default Home;