
     class DisplayCustomer extends React.Component{
        render(){
         return <div><h2><u>{this.props.fname}</u> Details</h2>
         <b>First Name:</b> {this.props.fname}<br/>
         <b>Last Name:</b> {this.props.lname}<br/>
         <b>Email:</b> {this.props.email}<br/>
        
         <DisplayAddress address={this.props.address}/>
         <b>Zip:</b> {this.props.zip}
         </div>;
         }
         }
         class DisplayAddress extends React.Component{
        render(){
         return <div><b><u>Address</u></b><br/>
        Street:{this.props.address.street}<br/>
         City:{this.props.address.city}<br/>
        
        
         </div>
         }
         }
         var address1 ={
         street: "Spice Wood Springs",
         city:"Atlanta"
         };
         var address2 ={
        street: "Mira beach Blvd",
         city:"Florida"
        };
         var address3 ={
        street: "Scott Midway Py",
         city:"Alabama"
        };
         var address4 ={
        street: "Nepal Midway Pyt",
         city:"Kurseong"
        };
         ReactDOM.render(
        <div>
        <DisplayCustomer fname="John" lname = "Smith" email="john@gmail.com" address={address1} zip = "12345"/>
        <DisplayCustomer fname="Bob" lname = "Lingel" email="bob@gmail.com" address={address2} zip = "43210"/> 
        <DisplayCustomer fname="Tillman" lname = "Hungerman" email="tillman@gmail.com" address={address3} zip = "30024"/> 
        <DisplayCustomer fname="Yanki" lname = "Sherpa" email="yanki@gmail.com" address={address4} zip = "N/A"/> 
         
         </div>
        , document.getElementById("root"));
        