<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoMechanic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorClass extends AbstractTagGroup
{
    protected string $id = 'PhotoMechanic:ColorClass';

    protected string $name = 'ColorClass';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Class',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhotoMechanic::SoftEdit
             * line : 211863
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PhotoMechanic::SoftEdit.PhotoMechanic:ColorClass',
            'desc' => [
                'en' => 'Color Class',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
