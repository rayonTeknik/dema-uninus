import { Feature } from "@/types/feature";

const SingleFeature = ({ feature }: { feature: Feature }) => {
  const { icon, title, paragraph } = feature;
  return (
    <div className="w-full">
      <div className="wow fadeInUp items-center" data-wow-delay=".15s">
        <div className="mb-3 flex items-center justify-center">
          <div className="h-[70px] w-[70px] rounded-md flex items-center justify-center bg-primary bg-opacity-10 text-primary">
            {icon}
          </div>
        </div>

        <h3 className="mb-5 text-s font-bold text-black dark:text-white sm:text-2m lg:text-m m:text-2m text-center">
          {/* {title} */}
        </h3>
        <p className="mb-5 text-s font-narrow text-black dark:text-white sm:text-2m lg:text-m m:text-2m text-center">
          {paragraph}</p>
      </div>
    </div>

  );
};

export default SingleFeature;
