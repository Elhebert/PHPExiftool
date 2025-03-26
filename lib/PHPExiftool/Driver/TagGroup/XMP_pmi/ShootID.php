<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_pmi;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ShootID extends AbstractTagGroup
{
    protected string $id = 'XMP-pmi:ShootID';

    protected string $name = 'ShootID';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::pmi
             * line : 410708
             * type : string
             * writable : true
             * count :
             * flags : avoid
             */
            'id' => 'XMP::pmi.XMP-pmi:ShootID',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2049;
}
