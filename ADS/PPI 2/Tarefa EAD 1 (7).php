<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Turma</title></head>
    <body>
        <h1>Notas da turma</h1>
        <?php
            $turma = [
                ["nome" => "Ana Souza", "curso" => "ADS", "nota" => 8.5],
                ["nome" => "Bruno Lima", "curso" => "ADS", "nota" => 7.0],
                ["nome" => "Carla Nunes", "curso" => "Redes", "nota" => 9.2],
                ["nome" => "Silvio Til", "curso" => "História", "nota" => 3.0],
                ["nome" => "Ricardo Arantes", "curso" => "Artes", "nota" => 9.0],
                ["nome" => "Cecilia Texeira", "curso" => "História", "nota" => 5.9],
            ];

            function conceito($nota) {
                if ($nota >= 9) return "A";
                if ($nota >= 7) return "B";
                return "C";
            }

            function situacao($nota) {
                if ($nota >= 6) return "Aprovado";
                return "Reprovado";
            }

            function media($turma) {
                $soma = 0;
                foreach ($turma as $aluno):
                    $soma += $aluno["nota"];
                endforeach;
                $media = $soma/count($turma);    
                return $media;
            }

            function aluno_por_curso($curso, $turma) {
                $qtd = 0;

                foreach ($turma as $aluno):
                    if($aluno["curso"] == $curso){
                        $qtd +=1;
                    }
                endforeach;
                return $qtd;
            }
            

        ?><!--Use if dentro do foreach para destacar os aprovados — 
        por exemplo, com <td style="background:#cfc"> nas linhas com 
        nota >= 6.-->
        <?php
            $ads = 0;
            $redes = 0;
            $historia = 0;
            $artes = 0;
        ?>
        <p>Alunos por turma</p>
        <ul>
            <li>ADS: <?= aluno_por_curso('ADS', $turma) ?> aluno(s)</li>
            <li>Artes: <?= aluno_por_curso('Artes', $turma) ?> aluno(s)</li>
            <li>História: <?= aluno_por_curso('Redes', $turma) ?> aluno(s)</li>
            <li>Redes: <?= aluno_por_curso('Redes', $turma) ?> aluno(s)</li>

        </ul>
        <table border="1" cellpadding="6">
            <tr><th>Nome</th><th>Curso</th><th>Nota</th><th>Conceito</th><th>Situacao</th></tr>
            <?php foreach ($turma as $aluno): ?>
                <?php if($aluno["curso"] == "ADS"){
                        $ads +=1;
                    }
                    elseif($aluno["curso"] == "Artes"){
                        $artes +=1;
                    }
                    elseif($aluno["curso"] == "História"){
                        $historia +=1;
                    }
                    elseif($aluno["curso"] == "Redes"){
                        $redes +=1;
                    }?>

                <tr>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["curso"] ?></td>
                <td><?= $aluno["nota"] ?></td>
                <td><?= conceito($aluno["nota"]) ?></td>
                <?php if ($aluno["nota"] >= 6):?>
                    <td style="background:#cfc"><?= situacao($aluno["nota"]) ?></td>     
                <?php else:?>
                    <td><?= situacao($aluno["nota"]) ?></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
            <tr><th>Media da Turma <?= media($turma) ?></th></tr>
        </table>
        <p>Total: <?= count($turma) ?> alunos</p>
    </body>
</html>
