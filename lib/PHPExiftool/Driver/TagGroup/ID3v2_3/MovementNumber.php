<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_3;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MovementNumber extends AbstractTagGroup
{
    protected string $id = 'ID3v2_3:MovementNumber';

    protected string $name = 'MovementNumber';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Movement Number',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ID3::v2_3
             * line : 103236
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ID3::v2_3.ID3v2_3:MovementNumber',
            'desc' => [
                'en' => 'Movement Number',
            ],
        ],
    ];

    protected int $count = 0;
}
