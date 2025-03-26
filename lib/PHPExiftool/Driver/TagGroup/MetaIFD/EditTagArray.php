<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EditTagArray extends AbstractTagGroup
{
    protected string $id = 'MetaIFD:EditTagArray';

    protected string $name = 'EditTagArray';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Edit Tag Array',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Meta
             * line : 108955
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Kodak::Meta.MetaIFD:EditTagArray',
            'desc' => [
                'en' => 'Edit Tag Array',
            ],
        ],
    ];

    protected int $count = 0;
}
