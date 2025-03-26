<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PSP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ResolutionUnit extends AbstractTagGroup
{
    protected string $id = 'PSP:ResolutionUnit';

    protected string $name = 'ResolutionUnit';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Resolution Unit',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PSP::Image
             * line : 190643
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PSP::Image.PSP:ResolutionUnit',
            'desc' => [
                'en' => 'Resolution Unit',
            ],
        ],
    ];

    protected int $count = 0;
}
