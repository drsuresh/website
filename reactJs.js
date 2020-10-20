import React from 'react';
import ReactDOM from 'react-dom';

const name = {
    fname: 'Jimmy',
    lname: 'Nguyen'
};

function fullname(person){
    return 'The full name is ' + person.fname + ' ' + person.lname
};

const person = <p>{fullname(name)}</p>;

ReactDOM.render(
    person,
    document.getElementById('example')
);