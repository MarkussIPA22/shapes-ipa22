import {useEffect} from "react";
function App () {
  useEffect(() => {
    async function getData() {
      const response = await fetch ("http://localhost:8080/");
      const data = response.json();
      console.log(data);
    }
    getData();
  });
  return <h1>Hi from frontend</h1>

}

export default App;