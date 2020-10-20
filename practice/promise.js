      function fetchAndDecode(url, type) {
        return fetch(url).then(response => {
          if(!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
          } else {
            if(type === 'blob') {
              return response.blob();
            } else if(type === 'text') {
              return response.text();
            }
          }
        })
        .catch(e => {
          console.log(`There has been a problem with your fetch operation for resource "${url}": ` + e.message);
        });
      }

      let parents = fetchAndDecode('1.jpg', 'blob');
      let cat = fetchAndDecode('/pictures/adventure/1.jpg', 'blob');
      let description = fetchAndDecode('1.txt', 'text');

      Promise.all([parents, cat, description]).then(values => {
        console.log(values);
        let objectURL1 = URL.createObjectURL(values[0]);
        let objectURL2 = URL.createObjectURL(values[1]);
        let descText = values[2];

        let image1 = document.createElement('img');
        let image2 = document.createElement('img');
        image1.src = objectURL1;
        image2.src = objectURL2;
        document.body.appendChild(image1);
        document.body.appendChild(image2);

        let para = document.createElement('p');
        para.textContent = descText;
        document.body.appendChild(para);
      });