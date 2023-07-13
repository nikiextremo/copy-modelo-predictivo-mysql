import React from 'react';
import ReactDOM from 'react-dom/client';

function Index() {
    return (<div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Index Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>);
}

export default Index;

if (document.getElementById('index-react')) {
    // const Index = ReactDOM.createRoot(document.getElementById("index-react"));

    // Index.render(
    //     <React.StrictMode>
    //         <Example/>
    //     </React.StrictMode>
    // )
    ReactDOM.render(<Index />, document.getElementById('index-react'));
}
