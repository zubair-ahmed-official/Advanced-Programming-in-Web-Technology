import React from 'react';

import { useState } from 'react';
const Click=(props)=>
  {
      const[d,setD] = useState(0);

      const change=()=>
      {
          setD(d+1);
      }
    return (
      <div class="container">
          <br></br>
      <button class="btn btn-outline-danger" onClick={change}>Click</button> &nbsp;
     
      <div class="c">{d}</div>
      </div>
    )
  }

  export default Click;