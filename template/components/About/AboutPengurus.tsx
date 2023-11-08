import React from 'react'
import SectionTitle from '../Common/SectionTitle'
import DataPengurus from './DataPengurus'

const AboutPengurus = () => {
  return (
    <section id="blog" className="bg-primary/5 py-16 md:py-20 lg:py-28">
    <div className="container">
      <SectionTitle
        title="Pengurus Dema"
        paragraph="Pengurus Dema adalah instrumen paling baik dalam pencerahan dan meningkatkan kualitas manusia sebagai makhluk rasional, moral, dan sosial."
        center
      />

      <div className="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-2 md:gap-x-6 lg:gap-x-8 xl:grid-cols-3">
        {pengurusData.map((pengurus) => (
          <div key={pengurus.id} className="w-full">
            <DataPengurus pengurus={pengurus} />
          </div>
        ))}
      </div>
    </div>
  </section>
  )
}

export default AboutPengurus