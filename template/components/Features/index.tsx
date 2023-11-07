import SectionTitle from "../Common/SectionTitle";
import SingleFeature from "./SingleFeature";
import featuresData from "./featuresData";

const Features = () => {
  return (
    <>
      <section
        id="features"
        className="bg-primary/[.03] py-16 md:py-20 lg:py-28"
      >
        <div className="container">
          <SectionTitle
            title="Visi Dema"
            paragraph="
            Menjadikan Dema Uninus sebagai wahana intelektual mahasiswa yang berlandaskan asas 
            kesatuan tujuan, penyerap aspirasi mahasiswa uninus dan sekaligus inisiator penggerak 
            pelaksana aspirasi, guna mewujudkan Dema Uninus yang kompetible, harmonis dan berjiwa sosialis."
            center
          />

          <SectionTitle
            title="Misi Dema"
            paragraph=" "
            center
          />
          <div className="grid grid-cols-1 gap-x-8 gap-y-14 md:grid-cols-2 lg:grid-cols-3">
            {featuresData.map((feature) => (
              <SingleFeature key={feature.id} feature={feature} />
              
            ))}
          </div>
        </div>
      </section>
    </>
  );
};

export default Features;
