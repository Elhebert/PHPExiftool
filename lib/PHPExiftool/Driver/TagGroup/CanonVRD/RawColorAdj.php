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
class RawColorAdj extends AbstractTagGroup
{
    protected string $id = 'CanonVRD:RawColorAdj';

    protected string $name = 'RawColorAdj';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Raw Color Adj',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : CanonVRD::Ver1
             * line : 60288
             * type : int16u
             * writable : true
             * count :
             * flags :
             */
            'id' => 'CanonVRD::Ver1.CanonVRD:RawColorAdj',
            'desc' => [
                'en' => 'Raw Color Adj',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
