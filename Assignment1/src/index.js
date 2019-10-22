import style from './styles/style.scss';


function component() {
    const element = document.createElement('div');
    const name = "Dani";
  
    element.innerHTML =  `This is the CMS assignment for: ${name}`;
  
    return element;
  }
  
  document.body.appendChild(component());
