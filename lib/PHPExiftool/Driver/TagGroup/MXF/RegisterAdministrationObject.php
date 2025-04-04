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
class RegisterAdministrationObject extends AbstractTagGroup
{
    protected string $id = 'MXF:RegisterAdministrationObject';

    protected string $name = 'RegisterAdministrationObject';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Register Administration Object',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118621
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:RegisterAdministrationObject',
            'desc' => [
                'en' => 'Register Administration Object',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
