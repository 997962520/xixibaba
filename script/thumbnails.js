window.onload = getProvince;

function createRequest() {//Ajax��PHP������Ҫ����
  try {
    request = new XMLHttpRequest();//����һ���µ��������;
  } catch (tryMS) {
    try {
      request = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (otherMS) {
      try {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (failed) {
        request = null;
      }
    }
  }
  return request;
}

function sech(id) {//ʡ�иı�ʱ������select��onchange�¼�

    var aa = document.getElementById(id);
if(id=="sheng"){
      getCity(aa.value);//����aa.valueΪʡ��id
}
if(id=="shi")
{
getCounty(aa.value);//����aa.valueΪ�е�id
}

}

function getProvince() {//��ȡ����ʡ
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "getDetails.php?ID=0";//ID=0ʱ������PHPʱ�����ȡ����ʡ
  request.open("GET", url, true);
  request.onreadystatechange = displayProvince; //���ûص�����
  request.send(null);    //��������
}

function getCity(id){//��ȡʡ��Ӧ����
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "getDetails.php?ID=" + escape(id);
  request.open("GET", url, true);
  request.onreadystatechange = displayCity;
  request.send(null);
}

function getCounty(id){//��ȡ�ж�Ӧ����
  request = createRequest();
  if (request == null) {
    alert("Unable to create request");
    return;
  }
  var url= "getDetails.php?ID=" + escape(id);
  request.open("GET", url, true);
  request.onreadystatechange = displayCounty;
  request.send(null);
}

 
function displayProvince() {//����ȡ�����ݶ�̬������select
  if (request.readyState == 4) {
    if (request.status == 200) {
  var a=new Array;
var b=request.responseText;//��PHP���ص����ݸ�ֵ��b
 a=b.split(",");//ͨ��","����һ���ݱ���������a��
  document.getElementById("sheng").length=1;
  var obj=document.getElementById("sheng');  
  for(i=0;i
      obj.options.add(new Option(a[i],i+1)); //��̬����OPTION�ӵ�select�У���һ������ΪText,�ڶ�������ΪValueֵ.

    }
  }
}

 
function displayCity() {//����ȡ�����ݶ�̬������select
  if (request.readyState == 4) {
    if (request.status == 200) {
  var a=new Array;
var b=request.responseText;
 a=b.split(",");
  document.getElementById("shi").length=1;//����ѡ��
  document.getElementById("xian").length=1;//����ѡ��
if(document.getElementById("sheng").value!="province"){
  var obj=document.getElementById('shi');  
  for(i=0;i
      obj.options.add(new Option(a[i], document.getElementById("sheng").value*100+i+1)); //ocument.getElementById("sheng").value*100+i+1��Ӧ�����е�ID��
}

    }
  }
}

function displayCounty() {//����ȡ������������select
  if (request.readyState == 4) {
    if (request.status == 200) {
  var a=new Array;
var b=request.responseText;
 a=b.split(",");
 document.getElementById("xian").length=1;
if(document.getElementById("sheng").value!="province"&&document.getElementById("shi").value!="city"){
  var obj=document.getElementById('xian');  
  for(i=0;i
      obj.options.add(new Option(a[i],i+1001)); 
}

    }
  }
}