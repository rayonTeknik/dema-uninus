export default async function getDataHome() {
  const home =await fetch (`${process.env.API_HOME_BASEURL}`);
  if(!home){
    throw new Error("Loading....");
  }
  return home.json();
}