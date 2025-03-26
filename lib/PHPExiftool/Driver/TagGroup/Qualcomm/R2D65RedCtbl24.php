<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Qualcomm;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class R2D65RedCtbl24 extends AbstractTagGroup
{
    protected string $id = 'Qualcomm:R2D65RedCtbl24';

    protected string $name = 'R2D65RedCtbl24';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'R2 D65 Red Ctbl 24',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Qualcomm::Main
             * line : 215123
             * type : ?
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Qualcomm::Main.Qualcomm:R2D65RedCtbl24',
            'desc' => [
                'en' => 'R2 D65 Red Ctbl 24',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 4;
}
