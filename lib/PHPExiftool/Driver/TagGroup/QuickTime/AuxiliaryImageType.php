<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AuxiliaryImageType extends AbstractTagGroup
{
    protected string $id = 'QuickTime:AuxiliaryImageType';

    protected string $name = 'AuxiliaryImageType';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Auxiliary Image Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::ItemPropCont
             * line : 228527
             * type : undef
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::ItemPropCont.QuickTime:AuxiliaryImageType',
            'desc' => [
                'en' => 'Auxiliary Image Type',
            ],
        ],
    ];

    protected int $count = 0;
}
