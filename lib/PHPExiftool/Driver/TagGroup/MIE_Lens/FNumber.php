<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MIE_Lens;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FNumber extends AbstractTagGroup
{
    protected string $id = 'MIE-Lens:FNumber';

    protected string $name = 'FNumber';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'F Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MIE::Lens
             * line : 111534
             * type : rational64u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'MIE::Lens.MIE-Lens:FNumber',
            'desc' => [
                'en' => 'F Number',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
