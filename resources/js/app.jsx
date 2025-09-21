import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import App from '../../frontend/src/App.jsx';

// Verifica se o elemento com o ID 'root' existe e renderiza a aplicação
if (document.getElementById('root')) {
    ReactDOM.createRoot(document.getElementById('root')).render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );
}