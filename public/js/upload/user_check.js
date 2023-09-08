            var counter = 1;
                function addInput() {
                    var inputContainer = document.getElementById('inputContainer');
                    var inputWrapper = document.createElement('div');
                    inputWrapper.setAttribute('id','input-warpper')

                    inputWrapper.classList.add('input-wrapper');


                    var s_id = document.createElement('label');
                    s_id.setAttribute('class','form-label');
                    s_id.setAttribute('id','sid-input-la');
                    s_id.textContent = "รหัสนักศึกษา";
                    inputWrapper.appendChild(s_id);

                    var sid_input = document.createElement('input');
                    sid_input.setAttribute('type', 'text');
                    sid_input.setAttribute('class', 'form-control mb-3 col-6');
                    sid_input.setAttribute('id','sid-input');
                    sid_input.setAttribute('name', 'sid_input_author[]');
                    inputWrapper.appendChild(sid_input);







                    var deleteButton = document.createElement('span');
                    deleteButton.setAttribute('class','btn btn-danger ms-2')
                    inputWrapper.appendChild(deleteButton);

                    deleteButton.textContent = 'ลบ';

                    deleteButton.onclick = function() {

                        inputWrapper.remove();
                    };
                    inputWrapper.appendChild(deleteButton);

                    inputContainer.appendChild(inputWrapper);
                    counter++;
                    }
