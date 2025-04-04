<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ReleasableCountryCode extends AbstractTagGroup
{
    protected string $id = 'MXF:ReleasableCountryCode';

    protected string $name = 'ReleasableCountryCode';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Releasable Country Code',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116709
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ReleasableCountryCode',
            'desc' => [
                'en' => 'Releasable Country Code',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118324
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ReleasableCountryCode',
            'desc' => [
                'en' => 'Releasable Country Code',
            ],
        ],
    ];

    protected int $count = 0;
}
