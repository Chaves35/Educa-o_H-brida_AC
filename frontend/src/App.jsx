import React, { useState } from 'react';
import Login from './Login.jsx';
import Register from './Register.jsx';
import './App.css';

// O componente App é o ponto de entrada da nossa aplicação.
// Ele gerencia o estado da página atual para alternar entre
// os componentes de Login e Register.
function App() {
  const [currentPage, setCurrentPage] = useState('login');

  // Função para lidar com a mudança de página
  const handlePageChange = (page) => {
    setCurrentPage(page);
  };

  const renderPage = () => {
    if (currentPage === 'login') {
      return <Login onPageChange={handlePageChange} />;
    }
    if (currentPage === 'register') {
      return <Register onPageChange={handlePageChange} />;
    }
    // Página padrão
    return <Login onPageChange={handlePageChange} />; 
  };

  return (
    <div className="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-4">
      {/* Container principal para os componentes e botões de navegação */}
      {renderPage()}
    </div>
  );
}

export default App;
