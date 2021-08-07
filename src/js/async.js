// Referenced from: https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Asynchronous/Async_await
function hello_normal() { return "Hello" };

console.log( hello_normal() );

async function hello() { return "Hello" };
// Or you can do it like so: let hello = async function() { return "Hello" };
// Or like so: let hello = async () => { return "Hello" };

console.log( hello() );

console.log("To complete the promise, use then.");

hello().then((value) => console.log( value ) );

hello().then( (value ) => {
    console.log( value );
})

// or shorthand of
hello().then(console.log)

async function hello() {
    return greeting = await Promise.resolve("Hello");
};

hello().then(alert);

// Async versus non-async


// Non-async
fetch('https://dummyimage.com/800x600/000/fff&text=test_non_async')
.then(response => {
  if (!response.ok) {
    throw new Error(`HTTP error! status: ${response.status}`);
  }
  return response.blob();
})
.then(myBlob => {
    blob = myBlob;
    // preprocessBlob( blob );
    return blob
})
.then(myBlob => {
  let objectURL = URL.createObjectURL(myBlob);
  let image = document.createElement('img');
  image.src = objectURL;
  document.body.appendChild(image);
})
.catch(e => {
  console.log('There has been a problem with your fetch operation: ' + e.message);
});


// Async  
async function myFetch(url) {
    let response = await fetch(url);
  
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
  
    let myBlob = await response.blob();
  
    let objectURL = URL.createObjectURL(myBlob);
    let image = document.createElement('img');
    image.src = objectURL;
    document.body.appendChild(image);
}

myFetch('https://dummyimage.com/800x600/000/fff&text=test_async')
.catch(e => {
console.log('There has been a problem with your fetch operation: ' + e.message);
});


myFetch('no_exist')
.catch(e => {
console.log('There has been a problem with your fetch operation: ' + e.message);
});

// Rewritten

async function myFetch2( url ) {
    let response = await fetch(url);
    if (!response.ok) {
      throw new Error(`HTTP error! status: ${response.status}`);
    }
    return await response.blob();
}
  
  myFetch2('coffee.jpg').then((blob) => {
    let objectURL = URL.createObjectURL(blob);
    let image = document.createElement('img');
    image.src = objectURL;
    document.body.appendChild(image);
  }).catch(e => console.log(e));
  
  myFetch2("https://dummyimage.com/800x600/000/fff&text=test_async2").then((blob) => {
    let objectURL = URL.createObjectURL(blob);
    let image = document.createElement('img');
    image.src = objectURL;
    document.body.appendChild(image);
  }).catch(e => console.log(e));


class Person {
    constructor(first, last, age, gender, interests) {
        this.name = {
        first,
        last
        };
        this.age = age;
        this.gender = gender;
        this.interests = interests;
    }

    async greeting() {
        return await Promise.resolve(`Hi! I'm ${this.name.first}`);
    };

    farewell() {
        console.log(`${this.name.first} has left the building. Bye for now!`);
    };
}

let han = new Person('Han', 'Solo', 25, 'male', ['Smuggling']);

han.greeting().then(console.log);

// Performance problem with blocking asyncs


function timeoutPromise(interval) {
    return new Promise((resolve, reject) => {
      setTimeout(function(){
        resolve("done");
      }, interval);
    });
  };

  async function timeTest() {
    await timeoutPromise(3000);
    await timeoutPromise(3000);
    await timeoutPromise(3000);
  }

  let startTime = Date.now();
  timeTest().then(() => {
    let finishTime = Date.now();
    let timeTaken = finishTime - startTime;
    alert("First Function: Time taken in milliseconds: " + timeTaken);
  })



  function timeoutPromiseNew(interval) {
    return new Promise((resolve, reject) => {
      setTimeout(function(){
        resolve("done");
      }, interval);
    });
  };

  let startTime2 = Date.now();
  async function timeTest2() {
    const timeoutPromise1 = timeoutPromiseNew(3000);
    const timeoutPromise2 = timeoutPromiseNew(3000);
    const timeoutPromise3 = timeoutPromiseNew(3000);

    await timeoutPromise1;
    await timeoutPromise2;
    await timeoutPromise3;
  }

  timeTest2().then(() => {
    let finishTime = Date.now();
    let timeTaken = finishTime - startTime2;
    alert("Second Function: Time taken in milliseconds: " + timeTaken);
  })