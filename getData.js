const getData=async (url,renderfc)=>{
    const response=await fetch(url)
    const data=await response.json()
    renderfc(data)
}