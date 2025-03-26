<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Radiance;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Gamma extends AbstractTagGroup
{
    protected string $id = 'Radiance:Gamma';

    protected string $name = 'Gamma';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Gamma',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Radiance::Main
             * line : 232128
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Radiance::Main.Radiance:Gamma',
            'desc' => [
                'en' => 'Gamma',
            ],
        ],
    ];

    protected int $count = 0;
}
