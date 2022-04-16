import React from 'react';
import Card2 from './components/Card1';

import { useState, useEffect } from 'react';
import axios from 'axios';
import { useHistory } from 'react-router-dom';

const todoTitle = "Call Family";

const Login = () =>{
  const initialValues = {username:"", password:""};
  const [formValues, setFormValues] = useState(initialValues);
  const [formErrors, setFormErrors] = useState({});
  const [isSubmitted, setIsSubmitted] = useState(false);
  const [successMsg, setSuccessMsg] = useState();
  const [errorMsg, setErrorMsg] = useState();
  let history = useHistory();


  const hStyle = { color: 'red' };
  const sStyle = { color: 'green' };


  const handleChange = (e) => {
      const {name, value} = e.target;
      setFormValues({...formValues, [name]:value});
      //console.log(formValues);
  };

  const handleSubmit = (e) =>{
      e.preventDefault();
      setFormErrors(validate(formValues));
      setIsSubmitted(true);
      
  };

  useEffect(() => {
      //console.log(formErrors);
      if (Object.keys(formErrors).length === 0 && isSubmitted){
          axios.post("http://127.0.0.1:8000/api/login/user", formValues).then((resp)=>{
          localStorage.setItem('authToken', resp.data.authToken); 
          localStorage.setItem('userType', resp.data.userType);  
          console.log(localStorage.getItem('authToken'));
          console.log(localStorage.getItem('userType'));
          if (resp.data.successMsg && localStorage.getItem('userType') == 'admin'){
              history.push("/adminHomepage");
          }
          setSuccessMsg(resp.data.successMsg);  
          setErrorMsg(resp.data.errorMsg);     
      },(err)=>{

      });
      }
  }, [formErrors, isSubmitted]);

  const validate = (values) =>{
      const errors = {}

      if (!values.username){
          errors.username = "Username is required";
      }

      if (!values.password){
          errors.password = "Password is required";
      }

      return errors;
  };
  return(
          
          <div>
              <div class="main">
                  <div class="container">
                      <div class="signup-content">
                          
                          <div class="signup-form">
                              <form onSubmit={handleSubmit} class="register-form" id="register-form">
                                  <h2>Login</h2>
                                  <h4>{localStorage.getItem('authToken')}</h4>
                                  <h3 style={sStyle}>{successMsg}</h3>
                                  <h3 style={hStyle}>{errorMsg}</h3>
                                  <div class="form-group">
                                      <label for="pincode">Username :</label>
                                      <input type="text" placeholder="Enter Username" name="username" value={formValues.username} onChange={handleChange}/><br/>
                                      <p style={hStyle}>{formErrors.username}</p>
                                  </div>
                                  <div class="form-group">
                                      <label for="pincode">Password :</label>
                                      <input type="password" placeholder="Enter Password" name="password" value={formValues.password} onChange={handleChange}/><br/>
                                      <p style={hStyle}>{formErrors.password}</p>
                                  </div>
                                  <div class="form-submit">
                                      <input type="submit" value="Login" class="submit" name="submit" id="submit" />
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
  );
}
export default Login;