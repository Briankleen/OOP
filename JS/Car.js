class Car{

 constructor(license, Driver) {
    this.id;
    this.license = license;
    this.Driver = Driver;
    this.passenger;
}

printdataCar()  {
    console.log(this.Driver)
    console.log(this.Driver.name)
    console.log(this.Driver.document)
}
}
