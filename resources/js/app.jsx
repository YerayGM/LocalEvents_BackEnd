import ReactDOM from 'react-dom/client';
import Main from './components/Main';
import '../css/app.css';

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

ReactDOM.createRoot(document.getElementById('app')).render(
    <Main />
);