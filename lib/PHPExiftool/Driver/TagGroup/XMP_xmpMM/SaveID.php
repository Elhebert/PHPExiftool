<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpMM;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SaveID extends AbstractTagGroup
{
    protected string $id = 'XMP-xmpMM:SaveID';

    protected string $name = 'SaveID';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Save ID',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::xmpMM
             * line : 292300
             * type : integer
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::xmpMM.XMP-xmpMM:SaveID',
            'desc' => [
                'en' => 'Save ID',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
