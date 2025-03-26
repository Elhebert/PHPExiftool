<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_crd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ToneCurveRed extends AbstractTagGroup
{
    protected string $id = 'XMP-crd:ToneCurveRed';

    protected string $name = 'ToneCurveRed';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::crd
             * line : 401207
             * type : string
             * writable : true
             * count :
             * flags : avoid,list,seq
             */
            'id' => 'XMP::crd.XMP-crd:ToneCurveRed',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2625;
}
