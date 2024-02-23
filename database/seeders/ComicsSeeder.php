<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    public function run()
    {
        Comic::create([
            'title' => 'Gun Theory (2003) #4',
            'comic_number' => 4,
            'writers' => '[]',
            'description' => 'The phone rings, and killer-for-hire Harvey embarks on another hit. But nothing\'s going right this job. There\'s little room for error in the business of killing - so what happens when one occurs? 32 PGS./ PARENTAL ADVISORY ...$2.50',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/60/4bc69f11baf75.jpg',
            'price' => 2.50,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Zombies Assemble 2 (2017) #4',
            'comic_number' => 4,
            'writers' => '[{"name":"Kazuki Baba","role":"colorist (cover)"}]',
            'description' => 'THE END IS NIGH! It\'s the thrilling conclusion to ZOMBIES ASSEMBLE as the Avengers finally come face-to-face with Patient Zero - a super-powerful zombie who can control the mindless, mutated horde on the loose in New York City. When the team discovers who Jasper Scott really is, and what he\'s done to facilitate the spread of the virus, they\'ll learn just how intertwined his and Dr. Amano\'s pasts truly are. Can the Avengers overcome Patient Zero and save the city? Plus: Find out what really happened to Rhodey! Printed in black and white in the original right-to-left reading orientation.',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/59fa13d01c4f5.jpg',
            'price' => 6.00,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Zombie (2006) #4',
            'comic_number' => 4,
            'writers' => '[{"name":"Mike Raicht","role":"writer"}]',
            'description' => 'With a thousand zombies in front of him and two homicidal bank robbers behind him, Simon Garth has gone from innocent bystander to live zombie-bait in less than 24 hours. But will Simon have the guts -- and the brains -- to survive a no-win situation?  With a mysterious zombie plague spreading like wildfire -- and threatening to consume all of New York -- he\'d better! Good thing this is a MAX book! Don\'t miss the stomach-wrenching conclusion to this flesh munching MAX limited series by Mike Raicht and Kyle Hotz',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/4bc5b84a6f76a.jpg',
            'price' => 3.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Zombies Assemble (2017) #2',
            'comic_number' => 2,
            'writers' => '[{"name":"Jeff Youngquist","role":"editor"}]',
            'description' => 'The original manga is adapted into English for the first time! Time and again, the Avengers have assembled to save the Earth from destruction. But they\'ve never had to face a threat as gruesome and UNDEAD as this one! Now, Earth\'s Mightiest Heroes must fight to contain an outbreak of horrifying zombies, and stop them from spreading across the Earth! But not all of the Avengers will escape uninfected…',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/03/593062a46806d.jpg',
            'price' => 4.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #1',
            'comic_number' => 1,
            'writers' => '[{"name":"Vc Joe Sabino","role":"letterer"}]',
            'description' => 'Marvel’s most insanely irreverent duo returns! Ziggy Pig has hit a dry spell in showbiz, and will do anything to get his name back out there to land a gig!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/90/62f2a4329493e.jpg',
            'price' => 4.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #3',
            'comic_number' => 3,
            'writers' => '[{"name":"Mark Paniccia","role":"editor"}]',
            'description' => 'Step Two in winning the public\'s favor! Ziggy Pig disguises himself as Spider-Ham. What could possibly go wrong?',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/c0/63068b04e1530.jpg',
            'price' => 1.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #4',
            'comic_number' => 4,
            'writers' => '[{"name":"Mark Paniccia","role":"editor"}]',
            'description' => 'Ziggy and Silly put the Scammers to work in order to smear the reputations of Marvel\'s anthropomorphic characters!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/631a5d4b83f10.jpg',
            'price' => 4.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #2',
            'comic_number' => 2,
            'writers' => '[{"name":"Mark Paniccia","role":"editor"}]',
            'description' => 'Ziggy Pig and Silly Seal set out to ruin the reputation of Marvel\'s anthropomorphic characters!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/63068b04e0f49.jpg',
            'price' => 8.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #8',
            'comic_number' => 8,
            'writers' => '[{"name":"Mark Paniccia","role":"editor"}]',
            'description' => 'Ziggy Pig and Silly Seal land in hot water!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/635840dc2066c.jpg',
            'price' => 6.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Ziggy Pig and Silly Seal Infinity Comic (2022) #5',
            'comic_number' => 5,
            'writers' => '[{"name":"Mark Paniccia","role":"editor"}]',
            'description' => 'The Pet Avengers are in the crossfire of Ziggy Pig and Silly Seal’s deranged campaign!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/f0/6328effad2892.jpg',
            'price' => 5.99,
            'stock' => 20,
            'artist' => '',
        ]);
        Comic::create([
            'title' => 'Young X-Men (2008) #1 Silvestri Variant',
            'comic_number' => 1,
            'writers' => '[]',
            'description' => 'To be revealed 1/24/2008.',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4bb7c92b46061.jpg',
            'price' => 2.99,
            'stock' => 20,
            'artist' => '',
        ]);

        Comic::create([
            'title' => 'Young Men (1950) #27',
            'comic_number' => 27,
            'writers' => '[]',
            'description' => 'Torch and Toro must put the kibosh on a hypnotist who is turning his powers of persuasion into a dark art!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/c0/4bc37c07cacd3.jpg',
            'price' => 2.99,
            'stock' => 20,
            'artist' => '',
        ]);
        Comic::create([
            'title' => 'Marvel Age Spider-Man Vol. 2: Everyday Hero (2004) #8',
            'comic_number' => 8,
            'writers' => 'Todd Dezago, Daniel Quantz',
            'description' => 'The Marvel Age of Comics continues! This time around, Spidey meets his match against such classic villains as Electro and the Lizard, and faces the return of one of his first foes: the Vulture! Plus: Spider-Man vs. the Living Brain, Peter Parker\'s fight with Flash Thompson, and the wall-crawler tackles the high-flying Human Torch!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4bc665483c3aa.jpg',
            'price' => 5.99,
            'stock' => 20,
            'artist' => 'Mark Brooks, Michael Ryan, Udon Comics, Pat Davidson, Derek Fridolfs, Rich Perrotta, Jonboy Meyers, Michael OHare',
        ]);
    
        Comic::create([
            'title' => 'Official Handbook of the Marvel Universe (2004) #12 ',
            'comic_number' => 12,
            'writers' => 'Heather Buchanan, Ronald Byrd, Jeff Christiansen, Eric Engelhard, Mike Fichera, Jason Godin, Sean Mcquaid, Barry Reese, Al Sjoerdsma, Bryan Thiessen, Kerry Wilkinson',
            'description' => 'The spectacular sequel to last year\'s OFFICIAL HANDBOOK OF THE MARVEL UNIVERSE: SPIDER-MAN 2004, this Official Handbook contains in-depth bios on more than 30 of the wisecracking web-slinger\'s closest allies and most infamous enemies - including the Stacy Twins, fresh from the pages of AMAZING SPIDER-MAN, and Toxin, in time for this month\'s TOXIN #1! Plus: An all-new cover by superstar artist Tom Raney, digitally painted by Morry Hollowell.',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/4bc64020a4ccc.jpg',
            'price' => 3.99,
            'stock' => 20, 
            'artist' => 'Tom Raney',
        ]);

        Comic::create([
            'title' => 'The Stand: American Nightmares HC (Hardcover)',
            'comic_number' => 0,
            'writers' => 'Roberto Aguirre-Sacasa, Lee Bermejo, Virtual Calligr, John Rhett Thomas',
            'description' => 'The deadly super flu Captain Trips has devastated the country and now the few survivors must pick up the pieces and go on. Larry Underwood seeks escape from New York City. Lloyd contemplates an extremely unsavory dinner option in jail, and Stu Redman makes a desperate bid for freedom from his interrogators. Most ominous of all, the strange being called Randall Flagg continues his dread journey across the devastated landscape of America. You must not miss it! Collecting THE STAND: AMERICAN NIGHTMARE #1-5. Parental Advisory ...$24.99 ISBN: 978-0-7851-3621-7 Trim size: standard',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/10/4bb59859e2e3e.jpg',
            'price' => 24.99,
            'stock' => 20,
            'artist' => 'Laura Martin, Mike Perkins, Rus Wooton',
        ]);
    
        // Comic 2
        Comic::create([
            'title' => 'Official Handbook of the Marvel Universe (2004) #9 ',
            'comic_number' => 9,
            'writers' => 'Ronald Byrd, Jeff Christiansen, Jonathan Coupersmartt, Anthony Flamini, Michael Hoskin, Bill Lentz, Sean Mcquaid, Eric J. Moreels, Mark OEnglish, Stuart Vandal',
            'description' => 'Marvel\'s leading ladies take center stage! This Official Handbook includes in-depth bios on more than 40 of the House\'s most powerful women warriors - from Araña to Vindicator! Plus: an all-new cover by superstar artist Greg Land!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/4c7d666c0e58a.jpg',
            'price' => 3.99,
            'stock' => 20, 
            'artist' => 'Greg Land, Christopher Sotomayor',
        ]);
        Comic::create([
            'title' => 'Kabuki Reflections Vol. 1 (Hardcover)',
            'comic_number' => 0,
            'writers' => 'David Mack',
            'description' => 'Collecting the first six art books of Marvel\'s REFLECTIONS series from multiple Eisner Award-nominated creator David Mack, this gorgeous volume of cover paintings and step-by-step art techniques is being presented in oversized hardcover format to show off Mack\'s work to full effect. Readers have been waiting for an oversized art-book collection of Mack\'s work for years, and this monster volume delivers with loads of extras -- including never-before-seen art, new paintings, a cover gallery, figure studies, step-by-step art techniques and commentary, remastered pages, new design pages, a "Best of Letters" section, and more! A whopping 320 pages with extra features -- all elegantly collected in a high-end oversized hardcover with high-quality paper, embossment, and an all-new introduction and interview!',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/e0/4bac3ad5d17c7.jpg',
            'price' => 39.99,
            'stock' => 20,
            'artist' => 'David Mack',
        ]);
    
        Comic::create([
            'title' => 'X-Men: Fall Of The Mutants (2010)',
            'comic_number' => 0,
            'writers' => '',
            'description' => 'The body count rises higher than ever as the X-Men and their allies face war on every front! The original X-Men have formed X-Factor, and they come up against their deadliest challenge yet in Apocalypse and his Horsemen, including the all-new Archangel! The New Mutants lose one of their own! And after the Marauders slaughter the Morlocks, they take on the X-Men - and the survivors will be asked to sacrifice themselves to stop the evil Adversary! Featuring tie-ins starring Captain America, Daredevil, the Hulk, the Fantastic Four and Power Pack! Collecting NEW MUTANTS (1983) #55-61, UNCANNY X-MEN #220-227, X-FACTOR (1986) #18-26, CAPTAIN AMERICA (1968) #339, DAREDEVIL (1964) #252, FANTASTIC FOUR (1961) #312, INCREDIBLE HULK (1968) #336-337 & #340 and POWER PACK (1984) #35.',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/c0/4cbcd33563abd.jpg',
            'price' => 8.99,
            'stock' => 20,
            'artist' => '',
        ]);
    
        Comic::create([
            'title' => 'Incredible Hulks (2010) #604 ',
            'comic_number' => 604,
            'writers' => 'Greg Pak, Fred Van Lente',
            'description' => 'After picking fights with the Juggernaut, Norman Osborn, and the Wolverine clan, the most insane father and son team in the Marvel Universe might actually be bonding.  But everything\'s about to blow wide open for Bruce Banner and his big, green, barbarian son Skaar when one of the Hulk\'s greatest enemies brings back the most important villainess Bruce Banner\'s ever faced.  Who is the Harpy?  And whose side will Banner take when she and Skaar meet sword to claw in a gamma-powered deathmatch?  Stone might bleed, feathers might fly, and hearts might break in the highest stakes battle yet for Banner and Son! Plus, The Savage SHE-HULK continues her quest to find Jennifer Walters in a back-up by Fred Van Lente and Michael Ryan! Rated A ...$3.99',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/4badb223f33c9.jpg',
            'price' => 3.99,
            'stock' => 20,
            'artist' => 'Ariel Olivetti, Michael Ryan',
        ]);
        Comic::create([
            'title' => 'Penance: Relentless (2008)',
            'comic_number' => 0,
            'writers' => 'Paul Jenkins',
            'description' => 'From the pages of CIVIL WAR: FRONT LINE and THUNDERBOLTS! Once he was a hero, now only a shell of Robbie Baldwin remains. As Penance, he begins a slow descent into madness: the most hated man in America, blamed for the disaster at Stamford, tortured by visions of his failure and obsessed with strange, seemingly meaningless numbers. A relentless pursuit begins... Collecting PENANCE: RELENTLESS #1-5.',
            'image_url' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/4bb860a46f58d.jpg',
            'price' => 9.99,
            'stock' => 20,
            'artist' => 'Paul Gulacy',
        ]);

    }
}
