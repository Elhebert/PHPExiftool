<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CanonVRD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class GreenHSL extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:GreenHSL';

    protected string $name = 'GreenHSL';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Green HSL',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::DR4
             * line : 58884
             * type : ?
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::DR4.CanonVRD:GreenHSL',
            'desc' => [
                'en' => 'Green HSL',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
