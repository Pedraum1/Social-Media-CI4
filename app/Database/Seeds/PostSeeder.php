<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PostSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>1,
            'text'=>'Hoje visitei as montanhas da Patagônia! Um lugar incrível, cheio de paisagens deslumbrantes. Recomendo a todos que amam a natureza. 🌄 #Aventura #Viagem',
            'comments'=>120,
            'shares'=>45,
            'likes'=>1500,
            'views'=>5400
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>2,
            'text'=>'Novo projeto no GitHub! Um site responsivo usando Tailwind CSS. Confiram e me digam o que acham! 🚀 #DevLife #OpenSource',
            'comments'=>75,
            'shares'=>20,
            'likes'=>890,
            'views'=>3200
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>3,
            'text'=>'Estudando cardiologia esta semana! Alguém mais se interessa pelo funcionamento do coração? ❤️ #Medicina #Estudos',
            'comments'=>64,
            'shares'=>18,
            'likes'=>1150,
            'views'=>4000
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>4,
            'text'=>'Novo vídeo de treino HIIT no canal! Queima de gordura intensa em apenas 20 minutos. Vamos juntos! 💥 #Fitness #Treino',
            'comments'=>89,
            'shares'=>35,
            'likes'=>1340,
            'views'=>5200
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>6,
            'text'=>'Receita nova no blog: Tacos de grão-de-bico super fáceis e deliciosos. Confira e deixe seu feedback! 🌮 #ReceitasVegan #Culinária',
            'comments'=>56,
            'shares'=>22,
            'likes'=>990,
            'views'=>3000
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>5,
            'text'=>'Capturei um raro momento de um tigre caçando no seu habitat natural. É incrível como a natureza é surpreendente! 🐅 #FotografiaDeNatureza #Wildlife',
            'comments'=>132,
            'shares'=>55,
            'likes'=>2100,
            'views'=>6700
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>1,
            'text'=>'A cidade de Ushuaia é encantadora! Muito frio, mas valeu cada segundo. 🥶 #Viagem #ExplorandoOMundo',
            'comments'=>40,
            'shares'=>18,
            'likes'=>980,
            'views'=>2500
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>2,
            'text'=>'Dicas para iniciantes em JavaScript: comece pequeno, entenda o básico e pratique bastante. 💻 #Programação #DicasDev',
            'comments'=>47,
            'shares'=>16,
            'likes'=>760,
            'views'=>2900
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>3,
            'text'=>'A importância de uma boa rotina de estudos: foco, disciplina e pausas estratégicas. Mantendo o ritmo por aqui! 💪 #VidaDeEstudante #Medicina',
            'comments'=>85,
            'shares'=>30,
            'likes'=>1350,
            'views'=>4600
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>4,
            'text'=>'Bora treinar pernas hoje? Separei uma sequência de exercícios para você queimar! 🔥 #LegDay #Treino',
            'comments'=>94,
            'shares'=>40,
            'likes'=>1670,
            'views'=>5900
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>6,
            'text'=>'Você sabia que o tofu pode ser usado de várias formas na cozinha? Hoje, fiz um prato incrível com tofu defumado. 🍽️ #CulináriaVegan #Tofu',
            'comments'=>44,
            'shares'=>15,
            'likes'=>870,
            'views'=>2700
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>5,
            'text'=>'O pôr do sol na savana é um dos momentos mais bonitos que já capturei. A natureza nunca decepciona. 🌅 #AventuraFotográfica #Natureza',
            'comments'=>101,
            'shares'=>48,
            'likes'=>1800,
            'views'=>5600
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>1,
            'text'=>'Conhecendo novos amigos de diferentes culturas durante minhas viagens. O mundo é um lugar maravilhoso. 🌍 #IntercâmbioCultural #NovasAmizades',
            'comments'=>88,
            'shares'=>33,
            'likes'=>1450,
            'views'=>4900
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>2,
            'text'=>'Teste o seu conhecimento em CSS com este quiz rápido que criei. Pronto para o desafio? 🎯 #CSS #DesenvolvimentoWeb',
            'comments'=>59,
            'shares'=>28,
            'likes'=>820,
            'views'=>3400
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>3,
            'text'=>'O estágio está sendo uma experiência incrível! Cada dia aprendendo algo novo e me apaixonando mais pela medicina. 🏥 #Estágio #VidaDeMedEstudante',
            'comments'=>122,
            'shares'=>52,
            'likes'=>2100,
            'views'=>6900
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>4,
            'text'=>'Vamos focar em uma alimentação equilibrada essa semana? O que você come define sua saúde! 🍎 #Nutrição #VidaSaudável',
            'comments'=>80,
            'shares'=>29,
            'likes'=>1120,
            'views'=>3800
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>6,
            'text'=>'Se você ama bolo de chocolate, precisa provar esta versão vegana que acabei de postar! É tão boa quanto a tradicional. 🎂 #ReceitaVegan #CulináriaConsciente',
            'comments'=>65,
            'shares'=>24,
            'likes'=>1010,
            'views'=>3300
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>5,
            'text'=>'Os pássaros na floresta amazônica são um espetáculo à parte. Cada clique é uma surpresa. 🦜 #FotografiaDeAves #NaturezaPura',
            'comments'=>113,
            'shares'=>49,
            'likes'=>1920,
            'views'=>6100
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>1,
            'text'=>'Planejando meu próximo destino! Qual país vocês acham que eu deveria explorar em seguida? 🌏 #ViajarÉViver #PróximasAventuras',
            'comments'=>154,
            'shares'=>60,
            'likes'=>2200,
            'views'=>7200
        ]);
        
        $this->db->table('posts')->insert([
            'created_at'=>Time::now(),
            'updated_at'=>Time::now(),
            'writer'=>2,
            'text'=>'Quando o código finalmente compila sem erros... essa sensação não tem preço! 😅 #DevLife #Programador',
            'comments'=>87,
            'shares'=>37,
            'likes'=>970,
            'views'=>4000
        ]);
        

    }
}
