<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SignatureUsageRights extends AbstractTagGroup
{
    protected string $id = 'PDF:SignatureUsageRights';

    protected string $name = 'SignatureUsageRights';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Signature Usage Rights',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PDF::TransformParams
             * line : 182800
             * type : ?
             * writable : false
             * count :
             * flags : list
             */
            'id' => 'PDF::TransformParams.PDF:SignatureUsageRights',
            'desc' => [
                'en' => 'Signature Usage Rights',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 64;
}
